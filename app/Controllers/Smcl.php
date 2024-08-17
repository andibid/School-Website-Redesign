<?php

namespace App\Controllers;

class Smcl extends BaseController
{
    public function getIndex()
    {
        return view('index');
    }

    public function getContact()
    {
        return view('contact');
    }

    public function getAbout()
    {
        return view('about');
    }

    public function getPrograms()
    {
        return view('programs');
    }

    public function getPolicy()
    {
        return view('policy');
    }

    public function getMissionvis()
    {
        return view('missionvis');
    }
}
