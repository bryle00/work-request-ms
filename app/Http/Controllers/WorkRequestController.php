<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkRequest;

class WorkRequestController extends Controller
{
    public function workrequest(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'status' => ['required'],
            'issue' => ['required'],
            'comments' => ['required'],
        ]);
        
        WorkRequest::create([
            'name' =>$request->name,
            'status' =>$request->status,
            'issue' =>$request->issue,
            'comments' =>$request->comments
        ]);
    return redirect('/requestor/dashboard');
    }
}
