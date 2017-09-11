<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public function __construct() {
        $this->middleware(['auth', 'isAdmin']); 
    }

    public function index()
    {
    	return view('admins.index');
    }
}
