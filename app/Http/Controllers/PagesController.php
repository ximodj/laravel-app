<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PagesController extends Controller
{


    public function tasks()
    {
        return view('tasks');
    }
    public function users()
    {
        return view('users');
    }public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }

}
