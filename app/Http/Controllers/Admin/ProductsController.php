<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\Gymtrait;
use App\Http\Requests\ProductRequest;
use App\Traits\ProductTrait;
class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    use Gymtrait;
     use ProductTrait;
    public function addProduct()
    {
        $gyms=Gymtrait::latestgymes();                                    
        return view('admin.products.add-product',compact('gyms'));	
     }
     public function storeProduct(ProductRequest $request)
     {
     	$result=$this->newproduct($request);

             if ($result == true) {

               return back()->with('success','Product Add Successfully');
            
             }
     }
}
