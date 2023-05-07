<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\User;

use App\Models\Order;
use App\Models\Good;
use App\Models\GoodOrder;


class AdminOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $confirmed_orders = Order::where('confirmed', '=', 1)->get();
        $in_progress_orders = Order::where('in_progress', '=', 1)->get();
        $finished_orders = Order::where('finished', '=', 1)->get();
        return view('admin_orders.index', compact('confirmed_orders', 'in_progress_orders', 'finished_orders'));
    }

    public function confirm() {
        $order = Order::find(request()->order_id);
        $order->update([
            'confirmed' => 0,
            'in_progress' => 1
        ]);

        return redirect()->route('admin.orders');
    }

    public function finish() {
        $order = Order::find(request()->order_id);
        $order->update([
            'in_progress' => 0,
            'finished' => 1
        ]);

        return redirect()->route('admin.orders');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);
        $order_amounts = GoodOrder::where('order_id', '=', $id)->get();

        $user = User::where('email', '=', $order->email)->get();

        return view('admin_orders.order', compact('order', 'order_amounts', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $order = Order::find(request()->order_id);
        $order->delete();

        return redirect()->route('admin.orders');
    }
}
