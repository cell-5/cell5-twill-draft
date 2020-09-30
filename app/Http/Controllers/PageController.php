<?php

namespace App\Http\Controllers;


class PageController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {

        return view('pages.home');
    }
};
