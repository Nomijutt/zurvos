<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\Gymtrait;
use App\models\Gym;
use App\Http\Requests\GymRequest;
class GymsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    use Gymtrait;
    public function addGym()
    {
		$gyms=Gymtrait::latestgymes();                                    
        return view('admin.gyms.add-gym',compact('gyms'));  
    }

    public function storeGym(GymRequest $request)
    {
    	$gym=Gymtrait::senddata($request);
    	if($gym=='true')
    	{
    		return back()->with('success','Gym Added Successfully');
    	}
    	else
    	{
    		return back()->with('success','Gym Not Added');
    	}
    }
}
