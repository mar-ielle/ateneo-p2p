<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;

class UsersController extends Controller
{
    public function index()
    {

    	$users = User::all();

    	return view('users.index', compact('users'));
    }

    public function show(User $user)
    {
    	
    	return view('users.show', compact('user'));
    }
}