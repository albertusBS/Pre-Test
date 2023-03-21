<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddProjectController extends Controller
{
    public function index() {
        return view('addproject');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'nama_projek' => 'required | max:255',
            'keterangan' => 'required',
            'status' => 'required'
        ]);

        $projects = new Project();
        $projects->nama_projek = $request->nama_projek;
        $projects->keterangan = $request->keterangan;
        $projects->status = $request->status;
        $projects->save();

        return view('project.addproject');
    }

    public function show()
    {
        $projects = DB::table('projects')->get();

        return view('home', ['projects' => $projects]);
    }

    public function edit($id) {
        $projects = DB::table('projects')->where('id', $id)->first();
        return view('project.updateproject', compact('projects'));
    }

    public function update(Request $request) {
        $this->validate($request, [
            'nama_projek' => 'required | max:255',
            'keterangan' => 'required',
            'status' => 'required'
        ]);

        DB::table('projects')->where('id', $request->id)->update([
            'nama_projek' => $request->nama_projek,
            'keterangan' => $request->keterangan,
            'status' => $request->status
            ]);

        return redirect()->intended('/home');
    }
}
