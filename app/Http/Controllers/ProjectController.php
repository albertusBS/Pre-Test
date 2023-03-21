<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function show() {
        $projects = DB::table('projects')->get();

        return view('home', ['projects' => $projects]);
    }
}
