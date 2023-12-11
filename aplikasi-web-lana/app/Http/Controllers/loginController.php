<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Login;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function index(): view
    {
        $login = Login::all();
        return view ('login.index')->with('login', $login);
    }

    public function create(): view
    {

    }

    public function store(Request $request): RedirectResponse
    {

    }
}
