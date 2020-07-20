<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use A17\Twill\Repositories\SettingRepository;

class PageController extends Controller{

    public function __construct() {
    }

    public function index(SettingRepository $settings){
       $seo = $settings->getFormFields('seo');

       dd($seo);

        // return view('pages.home', $seo);
    }

    
};