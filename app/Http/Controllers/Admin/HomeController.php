<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\Gymtrait;
use App\models\Gym;
class HomeController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth:admin');
    }

    public function home()
    {
    	$gyms=Gymtrait::latestgymes();
    	return view('admin.home',compact('gyms'));
    }
}
