<?php

namespace App\Http\Controllers;

use App\Plugin;
use Illuminate\Http\Request;
use Misd\Linkify\Linkify;

class PluginController extends Controller {

    public function index() {
        return view('content.plugin.table', ['plugins' => Plugin::all(), 'linkify' => new Linkify()]);
    }

    public function create() {
        return view('content.plugin.create');
    }

    public function store(Request $request) {
        (new ApiPluginController)->store($request);
        return redirect()->route('all_plugins');
    }

    public function show(Plugin $plugin) {
        return view('content.plugin.view', ['plugin' => $plugin]);
    }


    public function edit(Plugin $plugin) {
        return view('content.plugin.update', ['plugin' => $plugin]);
    }

    public function update(Request $request, Plugin $plugin) {
        (new ApiPluginController)->update($request, $plugin->name);
        return redirect()->route('all_plugins');
    }

    public function destroy(Plugin $plugin) {
        $plugin->delete();
        return redirect()->route('all_plugins');
    }
}
