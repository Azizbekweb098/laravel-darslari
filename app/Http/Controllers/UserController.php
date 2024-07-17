<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
     
        return 'Bu Userlarni Royhati';
    }

    public function show($user){
        return 'Siz tanlagan User ' . $user;
    }
    public function create(){
   return view('users.create');
    }
    public function edit($user_id){
      return  $user_id . ' ni ozgatirish';
    }
}
