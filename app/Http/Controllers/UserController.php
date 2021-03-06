<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index(){

        $title = "Gestão de Usuários";

        $user = $this->user->all();

        return view('Painel.User.index', compact('title', 'user'));


    }
}
