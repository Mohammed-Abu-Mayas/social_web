<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class TestApiController extends Controller
{
    //

    public function index()
    {
    	# code...
    	$data=User::all();
    	return $data;
    }

    //
    public function findUser($id)
    {
    	# code...
    	$data=User::find($id);
    	return $data;
    }
}
