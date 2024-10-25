<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
 public function create(Request $request) {
    // dd($request->all());
    $user_info = $request->all();
    $user = User::create([
        'email' => $user_info['email'],
        'password' => $user_info['pass'],
        'role' => $user_info['postjob'],
    ]);
    if($user) {
        return response()->json("success");
    } else {
        return response()->json("error");
    }
 }
}
