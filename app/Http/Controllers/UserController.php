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
   return 'sizning useringiz ' . $user;
  }
  public function create()
  {
    return view('test');
  }
  public function edit($id_user)
  {
  return $id_user . ' sizning useringiz';
  }
}
