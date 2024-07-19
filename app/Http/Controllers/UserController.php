<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        // return response('Bu Userlar royhati', 200, ['X-oly-s' => 'X-oly-Ot']);
        return redirect('users/create');
    }

    public function store(Request $request)
  {
    dd($request->all());
  }
  public function create()
  {
    return view('users.create');
  }
  public function show($user, $isim)
  {
    return view('photo.photo')->with('name', $isim )->with('id', $user);
  }
  public function edit($user_id){
  return  $user_id . ' id ozgatirildi';
  }
}
