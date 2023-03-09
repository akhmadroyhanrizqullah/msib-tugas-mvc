<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $payload['nama'] = 'roy';
        $payload['asal'] = 'sda';

        $payload['modelUser'] = User::all();

        return view('index', $payload);
    }
}
