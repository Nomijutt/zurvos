<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\Usertrait;
use App\models\Customer;
use App\Traits\Gymtrait;
use App\models\Gym;
use App\Partner;
class CustomersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
	use Usertrait;

    public function manageUsers(){

    	$users=$this->userslist();
    	$partners=Partner::all();

          if ($users->count() >0) {

             $gyms=Gymtrait::latestgymes();                                    
          	 return view('admin.manage-users.manage-users',compact('users','gyms','partners'));

          }else{
             
            return back()->with('success','Users Record Not Found.');
         }
     	
     }
}
