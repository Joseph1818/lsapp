<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        // This is how you add value into the HTML
        $title= 'Welcome to laravel';
        // return view ('pages.index', compact('title'));
        return view ('pages.index')->with('title', $title);

    }

    public function about(){
        $title= 'about';
        return view ('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
