<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Good;
use App\Models\Order;

class GoodInOrderController extends Controller
{

    public function create()
    {
        $goods = Good::all();
        $order_id = request()->order_id;
        return view('order_good.create', compact('order_id', 'goods'));
    }

    
    public function store(Request $request)
    {
        $order_id = request()->order_id;
        $good_id = request()->good_id;
        $amount = request()->amount;

        $order = Order::find($order_id);

        $order->goods()->attach($good_id, ['amount' => $amount]);

        return redirect()->route('user_orders.show', $order_id);
    }

 

    
    public function destroy()
    {
        $order = Order::find(request()->order_id);

        $order->goods()->detach(request()->good_id, ['amount' => request()->amount]);

        return redirect()->route('user_orders.show', request()->order_id);
    }
}
