<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        Project::query()->create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image_url' => '',
            'price' => 0,
            'types' => '',
            'type' => '',
            'about' => $request->input('about'),
        ]);

        return to_route('projects.index')->with('success', 'Success');
    }
}
