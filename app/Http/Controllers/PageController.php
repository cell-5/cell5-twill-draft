<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use A17\Twill\Repositories\SettingRepository;

class PageController extends Controller{
    protected $site_title;

    public function __construct() {
        $this->site_title = app(SettingRepository::class)->byKey('site_title', 'seo');
    }

    public function index(){
        $data['site_title'] = $this->site_title;

        dd($data);
        return view('pages.home', $data);
    }
};