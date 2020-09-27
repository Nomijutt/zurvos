<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\Gymtrait;
use App\Partner;
use App\Http\Requests\PartnerRequest;
class PartnerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    use Gymtrait;
    public function addPartner(){

             $gyms=Gymtrait::latestgymes();
             $partners=Partner::all();                                    
          	 return view('admin.partners.add-partner',compact('gyms','partners'));

     	
     }

     public function storePartner(PartnerRequest $request)
     {
     	$partner=new Partner();
     	$partner->name=$request->name;
     	$partner->email=$request->email;
     	$partner->password=bcrypt($request->password);
     	$partner->address=$request->address;
     	$partner->save();
     	return back()->with('success','Partner Added Successfully');
     }
}
