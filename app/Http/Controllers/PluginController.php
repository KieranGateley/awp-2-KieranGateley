<?php

namespace App\Http\Controllers;

use App\Plugin;
use Illuminate\Http\Request;

class PluginController extends Controller {

    public function index() {
        return view('content.plugin.table', ['plugins' => Plugin::all()]);
    }

    public function create() {
        return view('content.plugin.create');
    }

    public function store(Request $request) {
        Plugin::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'authors' => $request->input('authors'),
            'website' => $request->input('website'),
            'dependencies' => $request->input('dependencies'),
            'soft_dependencies' => $request->input('soft_dependencies'),
        ]);
    }

    public function show(Plugin $plugin) {
        return view('content.plugin.view', ['plugin' => $plugin]);
    }


    public function edit(Plugin $plugin) {
        return view('content.plugin.update', ['plugin' => $plugin]);
    }

    public function update(Request $request, Plugin $plugin) {
        $plugin->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'authors' => $request->input('authors'),
            'website' => $request->input('website'),
            'dependencies' => $request->input('dependencies'),
            'soft_dependencies' => $request->input('soft_dependencies'),
        ]);
    }

    public function destroy(Plugin $plugin) {
        $plugin->delete();
        return redirect()->route('home');
    }
}
