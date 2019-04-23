<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome To LaraBlog!';
        return view('pages.index', compact('title'));
    }

    public function about()
    {
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }

    public function services()
    {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO'],
        );
        return view('pages.services')->with($data);
    }
}
