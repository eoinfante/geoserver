<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Order::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'lng' => 'required|max:12',
            'lat' => 'required|max:12',
            'user_id' => 'required'
        ]);

        $order = Order::create($fields);

        return $order;
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return $order;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $fields = $request->validate([
            'lng' => 'required|max:12',
            'lat' => 'required|max:12',
            'user_id' => 'required'
        ]);

        $order->update($fields);

        return $order;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();

        return ['message' => 'The order was deleted'];
    }
}
