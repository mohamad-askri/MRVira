<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Http\Requests\UserRequest;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('admin.register');
    }


    public function store(AdminRequest $adminRequest)
    {
$this->validate($adminRequest,[

] );

        $admin_data = [
            'admin_username' => request()->input('username'),


            'admin_phone' => request()->input('phone'),

            'password' => request()->input('password'),

        ];


        $new_admin = Admin::create($admin_data);
        if ($new_admin) {
            echo "welcome";
        }

    }
}
