<?php

namespace App\Http\Controllers;

use App\Plugin;
use Illuminate\Http\Request;

class ApiPluginController extends Controller {

    public function index() {
        return Plugin::all();
    }

    public function show($id) {
        return Plugin::find($id);
    }

    public function store(Request $request) {
        $plugin = Plugin::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'authors' => $request->input('authors'),
            'website' => $request->input('website'),
            'dependencies' => str_replace(',', ', ', $request->input('dependencies')),
            'soft_dependencies' => str_replace(',', ', ', $request->input('soft_dependencies')),
            'spigot_id' => $this->getIdFromUrl($request->input('website')),
        ]);
        if ($request->has('version')) {
            $version = $plugin->versions()->where('version', '=', $request->input('version'))->first();
            if (!isset($version)) {
                $plugin->versions()->create(['version' => $request->input('version')]);
            }
        }
        return $plugin;
    }

    public function update(Request $request, $id) {
        $plugin = Plugin::findOrFail($id);
        return $this->updateRecord($request, $plugin);
    }

    private function updateRecord(Request $request, Plugin $plugin) {
        $plugin->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'authors' => $request->input('authors'),
            'website' => $request->input('website'),
            'dependencies' => $request->input('dependencies'),
            'soft_dependencies' => $request->input('soft_dependencies'),
            'spigot_id' => $this->getIdFromUrl($request->input('website')),
        ]);
        if ($request->has('version')) {
            $version = $plugin->versions()->where('version', '=', $request->input('version'))->first();
            if (!isset($version)) {
                $plugin->versions()->create(['version' => $request->input('version')]);
            }
        }
        return $plugin;
    }

    public function createIfNotExists(Request $request) {
        $plugin = Plugin::find($request->input('name'));
        if (!isset($plugin)) {
            return $this->store($request);
        } else {
            return $this->updateRecord($request, $plugin);
        }
    }

    public function destroy($id) {
        $plugin = Plugin::findOrFail($id);
        $plugin->delete();

        return 204;
    }

    private function getIdFromUrl(string $url) {
        if (strpos($url, "spigotmc.org") !== false) {
            $url = str_replace("https://www.spigotmc.org/resources/", "", $url);
            $url = str_replace("/", "", $url);
            if (is_int($url)) {
                return (int)$url;
            }
            return (int)substr($url, stripos($url, ".")+1);
        }
        return null;
    }
}
