<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $title="Welcome to our Website ";
        return view('pages.index')->with('title',$title);
    }
    public function services()
    {
        $data = array(
            'title'=>"Services",
            'services'=>['Programming','Web Developemt','SEO']
        );
        
        return view('pages.services')->with($data);
    }
    public function about()
    {
        $title="Welcome to our Blog";
        return view('pages.about')->with('title',$title);
    }
}
