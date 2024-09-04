<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        //obtem todos os registros da tabela
        $users = User::all();
        return response()->json($users);
    }
}
