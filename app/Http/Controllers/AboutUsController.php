<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AboutUsController extends Controller
{
    public function Index()
    {

      $Users = User::all();

      return view('content.aboutUs', ['users' => $Users]);
    }

    public function Show($id)
    {

      $User = User::where('id', $id)->first();

      return view('content.user', ['user' => $User]);
    }
}
