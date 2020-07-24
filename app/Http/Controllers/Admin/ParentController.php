<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ParentController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware('AdminValidate');
    }
}
