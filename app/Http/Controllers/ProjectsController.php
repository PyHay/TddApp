<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectsController extends Controller
{
    public function index(){
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    public function store(){
        request()->validate(['title' => 'required']);

        Project::create(request(['title', 'description']));

        return redirect('/projects');
    }
}
