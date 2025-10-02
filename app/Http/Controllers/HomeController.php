<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('home.index');
    }

    public function portfolio()
    {
        return view('home.portfolio');
    }



    public function serviceWebsite()
    {
        return view('home.service-website');
    }


    public function index3_one_page()
    {
        return view('home.index3-one-page');
    }

}
