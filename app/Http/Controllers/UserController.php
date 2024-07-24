<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
public  function welcome()
{
    return view(
        'welcome', ['name' => "<script>alert('Salom')</script>",
        'records' => [1,2,3,4]
    ]);
}
}
