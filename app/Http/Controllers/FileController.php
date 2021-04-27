<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{

    public function index()
    {   
        $files = File::all();
        return view('pages.file', compact('files'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        // dd( $request->file('img'));

        //STORAGE
        Storage::put('public/img/', $request->file('img'));

        
        //DB
        $img = new File();
        $img->src = $request->file('img')->hashName();
        $img->save();
        return redirect()->back();
    }



}
