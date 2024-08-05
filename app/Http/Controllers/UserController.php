<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = User::query()->latest('id')->paginate(5);

        return view('admin.user.index', compact('data'));
    }

    public function show(User $user)
    {
        return view('admin.user.' . __FUNCTION__, compact('user'));
    }
}
