<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        return view("user.dashboard");
    }
    public function jadwal(){
        return view("user.jadwal");
    }
}
