<?php

namespace App\Http\Controllers;
use App\Detective;
use Illuminate\Http\Request;

class DetectiveController extends Controller
{
    //
    public function show($detective_slug)
    {
        $detective = \App\Detective::where('slug', $detective_slug)->first();

        if (!$detective) {
            abort(404, 'Detective not found');
        }

        $view = view('detective/show');
        $view->detective = $detective;
        return $view;
    }
    public function index() 
    {
        $detective = Detective::orderBy('name', 'asc')->get();
        return view('detective/index', compact('detective'));
        
    }

    public function handleForm(Request $request) 
    {
        // $request = request(); alternative to injecting in method parameters
        
        
         
    }
}
