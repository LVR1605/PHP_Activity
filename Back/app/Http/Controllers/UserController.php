<?php

namespace App\Http\Controllers;

use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;

class UserController extends Controller
{
    //
    public function index(){

        $data = User::paginate(20);
              
        return $data;
    }
    public function getID($id){

        $data = User::find($id);
              
        return $data;
    }
}
