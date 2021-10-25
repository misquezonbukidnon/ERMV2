<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        return view('modules.import_export');
    }

    public function store(Request $request)
    {
        $request->file->store('public/files');
        return back()->withInput();
    }
}
