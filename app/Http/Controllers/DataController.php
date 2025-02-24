<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DataController extends Controller
{
    public function index(){
        $users = User::factory(10)->make();
        return Inertia::render('Private/Users/Index', [
            'users' => $users
        ]);
    }
}
