<?php

namespace App\Controllers;
use App\Classes\Mail;
use App\Models\Article;
use App\Classes\CSRFToken;

class AuthController extends BaseController
{
    public function showLoginForm()
    {
        return view('login');
    }

}