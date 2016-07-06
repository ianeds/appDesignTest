<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
    public function home()
    {
    return view('/pages/home');
    }

    public function work()
    {
    return view('/pages/work');
    }

    public function about()
    {
    return view('/pages/about');
    }

    public function touchscreen()
    {
    return view('/pages/touchscreen');
    }

    public function inter()
    {
    return view('/pages/inter');
    }

    public function search()
    {
    return view('/pages/search');
    }

    public function bannerAds()
    {
    return view('/pages/bannerAds');
    }

    public function projects()
    {
    return view('/pages/projects');
    }

    public function type()
    {
    return view('/pages/type');
    }

    public function trifold()
    {
    return view('/pages/trifold');
    }

    public function wvposter()
    {
    return view('/pages/wvposter');
    }
}




