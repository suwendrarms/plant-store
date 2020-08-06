<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ParentController extends Controller
{
    public function __construct()
    {
        //$this->middleware('AdminValidate');
        $this->middleware('auth');
        ///$this->middleware('AuthCheck');
    }
}
