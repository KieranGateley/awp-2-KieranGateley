<?php

namespace App\Http\Controllers;

use App\Plugin;
use Illuminate\Http\Request;

class ApiPluginController extends Controller
{

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
        ]);
    }

    public function update(Request $request, $id) {
        $plugin = Plugin::findOrFail($id);
        $plugin->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'authors' => $request->input('authors'),
            'website' => $request->input('website'),
            'dependencies' => $request->input('dependencies'),
            'soft_dependencies' => $request->input('soft_dependencies'),
        ]);

        return $plugin;
    }

    public function createIfNotExists(Request $request) {
        $plugin = Plugin::find($request->input('name'));
        if (!isset($plugin)) {
            return Plugin::create([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'authors' => $request->input('authors'),
                'website' => $request->input('website'),
                'dependencies' => $request->input('dependencies'),
                'soft_dependencies' => $request->input('soft_dependencies'),
            ]);
        } else {
            $plugin->update([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'authors' => $request->input('authors'),
                'website' => $request->input('website'),
                'dependencies' => str_replace(',', ', ', $request->input('dependencies')),
                'soft_dependencies' => str_replace(',', ', ', $request->input('soft_dependencies')),
            ]);
            return $plugin;
        }
    }

    public function destroy($id) {
        $plugin = Plugin::findOrFail($id);
        $plugin->delete();

        return 204;
    }
}
