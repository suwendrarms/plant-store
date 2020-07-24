<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use domain\Facade\UserFacade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Countries;
use CountryState;

class UserController extends ParentController
{
    public function index()
    {


        return view('pages.Admin.index');
    }


}
