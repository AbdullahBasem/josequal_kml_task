<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class KmlController extends Controller
{
    public function index()
    {
        $files = auth()->user()->files()->get();
        return view('user_kml.index', compact('files'));
    }

    public function createView()
    {
        return view('user_kml.add');
    }

    public function createSubmit(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'kml_file' => 'required|file'
        ]);
        $file = $request->file('kml_file');
        $file->store('public/files');
        $file_path = asset('storage/files') . '/' . $file->hashName();
        auth()->user()->files()->create([
            'title' => $request->title,
            'path' => $file_path
        ]);
        return redirect('/');

    }

    public function view(File $file)
    {
        return view('user_kml.view', compact('file'));
    }

    public function delete(File $file){
        $file->delete();
        return redirect('/');
    }
}
