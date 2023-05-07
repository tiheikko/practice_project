<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Order;
use App\Models\GoodOrder;

use Illuminate\Support\Facades\Auth;

class UserOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $orders = Order::where('email', '=', $user->email)->get();
        return view('user_orders.index', compact('orders'));
    }

    public function sendOrder() {
        $order_id = request()->order_id;
        $order = Order::find($order_id);

        $order->update([
            'draft' => 0,
            'confirmed' => 1,
            'note' => request()->note,
            'delivery_date' => request()->delivery_date
        ]);

        return redirect()->route('user_orders.index');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        Order::create([
            'email' => $user->email,
            'note' => null,
            'delivery_date' => null,
            'draft' => 1,
            'confirmed' => 0,
            'in_progress' => 0,
            'finished' => 0,
        ]);

        return redirect()->route('user_orders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($order_id)
    {
        $order = Order::find($order_id);
        $user = Auth::user();
        $orders = Order::with('goods')->where('id', '=', $order_id)->get();

        $orders_amount = GoodOrder::where('order_id', '=', $order_id)->get();

        if ($order->draft == 1) {
            return view('user_orders.order', compact('user', 'order_id', 'orders', 'orders_amount'));
        } else if ($order->finished == 1) {
            return view('user_orders.finished_order', compact('user', 'order_id', 'orders', 'orders_amount'));
        } else {
            return view('user_orders.confirmed_order', compact('user', 'order_id', 'orders', 'orders_amount'));
        }
        
    }


    public function destroy()
    {
        $order = Order::find(request()->order_id);
        $order->delete();

        return redirect()->route('user_orders.index');
    }
}
