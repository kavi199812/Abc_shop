<?php

namespace App\Http\Controllers\newBranch;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class newBranchController extends Controller
{
    public function index(){

        return view('newBranch');
    }

}
