<?php

namespace App\Console;

use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // Operations will take a while, especially for larger servers. Every 4 hours is recommended
        $schedule->call(function () {
            $client = new Client();
            $plugins = DB::table('plugins')->whereNotNull('spigot_id')->get();
            foreach ($plugins as $plugin) {
                $url = "https://api.spiget.org/v2/resources/" . $plugin->spigot_id . "/versions?size=1000";
                foreach (json_decode($client->get($url)->getBody(), true) as $api_version) {
                    $version = DB::table('plugin_versions')->where('plugin_name', $plugin->name)->where('version', $api_version['name'])->first();
                    if (!isset($version)) {
                        DB::table('plugin_versions')->insert(['version' => $api_version['name'], 'release_date' => $api_version['releaseDate'], 'plugin_name' => $plugin->name, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),]);
                    }
                }
            }
        })->cron('0 */4 * * *');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
