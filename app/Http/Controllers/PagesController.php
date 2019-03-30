<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{


    //
    public function admin() {
        $welcome = 'Welcome:';
        return view('admin')->with('welcome', $welcome);
    }

    //
    public function user() {
        $welcome = 'Welcome:';
        return view('user')->with('welcome', $welcome);
    }

    //
    public function dashboard() {
        $welcome = 'Welcome:';
        return view('pages.layouts.dashboard')->with('welcome', $welcome);
    }

    //
    public function template() {
        $explore = 'Collection:';
        return view('pages.layouts.template')->with('explore', $explore);
    }

    //
    public function index() {
        return view('pages.index');
    }

    //
    public function explore() {
        $page_title = 'EXPLORE:';
        return view('pages.explore')->with('page_title', $page_title);
    }

    //
    public function shop() {
        $page_title = 'SHOP:';
        return view('pages.shop', compact('page_title'));
    }

}
