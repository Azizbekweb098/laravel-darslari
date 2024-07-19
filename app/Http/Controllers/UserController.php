<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index()
  {
    return 'Royhatlar';
  }
  public function show($user)
  {

    

    $user += 1000;
   return view('users.show')->with( 'name', 'Xasanov')->with('id', $user);

  }
  public function store(Request $request)
  {
    dd($request->name);
  }
  public function create()
  {
    return view('users.create');
  }
  public function edit($id_user)
  {
  return $id_user . ' sizning useringiz';
  }
}
