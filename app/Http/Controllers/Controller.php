<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\User;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    public function index()
    {
        $data = User::all();
        return response($data);
    }
}
