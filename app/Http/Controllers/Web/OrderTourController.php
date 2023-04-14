<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderTourRequest;
use App\Models\OrderTour;
use Illuminate\Http\Request;

class OrderTourController extends Controller
{
    public function index($id)
    {   
        $order = OrderTour::where('id', $id)->first() ?: [];
        return view('web.order_tour', ['order' => $order]);
    }

    public function orderTourForm(OrderTourRequest $request)
    {   
        $data = $request->validated();
        $order = OrderTour::create($data);

        if ($order) event(new \App\Events\NewOrderTourEvent($order));

        return redirect()->route('order_tour', ['id' => $order->id]);
    }
}
