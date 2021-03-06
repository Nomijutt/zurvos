<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\models\VideoOrder;
use App\models\ProductOrder;
use App\Customer;
use Carbon\Carbon;
use DB;
class gymstatdetail extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $date=Carbon::now();
        $todaydate=$date->format('Y-m-d');
        $weekdate=$date->subweek()->format('Y-m-d');
        $monthdate=$date->submonth()->format('Y-m-d');
        $tv=DB::table('video_orders')->whereDate('video_orders.created_at','=',$todaydate)
        ->join('tutorials','tutorials.id','video_orders.tutorial_id')
        ->sum('tutorials.course_price');
        $wv=DB::table('video_orders')->whereDate('video_orders.created_at','>=',$weekdate)
                        ->whereDate('video_orders.created_at','<=',$todaydate)
                        ->join('tutorials','tutorials.id','video_orders.tutorial_id')
        ->sum('tutorials.course_price');
        $mv=DB::table('video_orders')->whereDate('video_orders.created_at','>=',$monthdate)
                        ->whereDate('video_orders.created_at','<=',$todaydate)
                        ->join('tutorials','tutorials.id','video_orders.tutorial_id')
        ->sum('tutorials.course_price');
        $totalv=DB::table('video_orders')
                        ->join('tutorials','tutorials.id','video_orders.tutorial_id')
        ->sum('tutorials.course_price');
        
       $tp=DB::table('product_orders')->whereDate('product_orders.created_at','=',$todaydate)
        ->join('products','products.id','product_orders.product_id')
        ->sum('products.product_price');
         $wp=DB::table('product_orders')->whereDate('product_orders.created_at','>=',$weekdate)
                        ->whereDate('product_orders.created_at','<=',$todaydate)
                        ->join('products','products.id','product_orders.product_id')
        ->sum('products.product_price');
        $mp=DB::table('product_orders')->whereDate('product_orders.created_at','>=',$monthdate)
                        ->whereDate('product_orders.created_at','<=',$todaydate)
                        ->join('products','products.id','product_orders.product_id')
        ->sum('products.product_price');
        $totalp=DB::table('product_orders')
                        ->join('products','products.id','product_orders.product_id')
        ->sum('products.product_price');
        
        $today=$tv+$tp;
        $week=$wv+$wp;
        $month=$mv+$mp;
        $total=$totalv+$totalp;
        return [
            'today_revenue'=>(string)$today,
            'Weekly_revenue'=>(string)$week,
            'monthly_revenue'=>(string)$month,
            'total_revenue'=>(string)$total,
        ];
    }
}
