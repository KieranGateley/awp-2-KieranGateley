<?php

namespace App\Http\Controllers;

use App\Plugin;
use App\PluginVersion;
use Illuminate\Http\Request;

class PluginVersionController extends Controller {

    public function index() {
        return view('content.version.table', ['versions' => PluginVersion::all()]);
    }

    public function create(Plugin $plugin)  {
        return view('content.version.create', ['plugin' => $plugin]);
    }

    public function store(Request $request, Plugin $plugin) {
        $plugin->versions()->create([
            'version' => $request->input('version'),
            'description' => $request->input('description'),
            'download_url' => $request->input('link'),
        ]);
        return redirect()->route('home');
    }

    public function show(Plugin $plugin, PluginVersion $version) {
        return view('content.version.view', ['plugin' => $plugin, 'version' => $version]);
    }

    public function edit(Plugin $plugin, PluginVersion $version) {
        return view('content.version.update', ['plugin' => $plugin, 'version' => $version]);
    }

    public function update(Request $request, Plugin $plugin, PluginVersion $version) {
        $version->update([
            'version' => $request->input('version'),
            'description' => $request->input('description'),
            'download_url' => $request->input('link'),
        ]);
        return redirect()->route('home');
    }

    public function destroy(Plugin $plugin, PluginVersion $version) {
        $version->delete();
        return redirect()->route('home');
    }
}
