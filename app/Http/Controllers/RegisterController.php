<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('admin.register');
    }


    public function store(Request $request)
    {
     $admin_data=[
         'admin_username'=>request()->input('username'),


         'admin_phone'=>request()->input('phone'),

         'password'=>request()->input('password'),

     ];
     $new_admin=User::create( $admin_data);
if ($new_admin ){
echo "welcome";
}

    }
}
