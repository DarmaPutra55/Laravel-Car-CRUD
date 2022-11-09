<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Car;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function test(){
        return User::where()->gets();
    }
}
