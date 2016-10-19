<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function getIndex()
    {
        return view('pages.welcome');
    }

    public function getAbout()
    {
        $first = 'Bas';
        $last = 'Hendriks';

        $fullname = $first . ' ' . $last;
		$email = 'hello@bashendriks.com';
		
		$data = [];
		$data['fullname'] = $fullname;
		$data['email'] = $email;

        return view('pages.about')->withData($data);
    }

    public function getContact()
    {
        return view('pages.contact');
    }
}
