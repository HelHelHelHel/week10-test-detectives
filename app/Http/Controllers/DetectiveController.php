<?php

namespace App\Http\Controllers;

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
        $detectives = Detective::orderBy('name', 'asc')->get();
        return view('detective/index', compact('detectives'));
        
    }

    public function handleForm(Request $request) 
    {
        // $request = request(); alternative to injecting in method parameters
        
        $search_term = $request->input('search');
        dd($search_term);
        return 'yay!';
    }
}
