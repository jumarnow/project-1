<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Exports\OrderExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\API\ResponseFormatter;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order = Order::with('product','user')->orderBy('order_code', 'asc')->get();
        return ResponseFormatter::success($order, 'Order get successfully');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $order = new Order();
        $order->order_code = Order::generateKode();
        $order->order_date = $request->order_date;
        $order->product_id = $request->product_id;
        $order->user_id = $request->user_id;
        $order->save();

        return ResponseFormatter::success($order, 'Order created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return ResponseFormatter::success($order, 'Order delete successfully');
    }

    public function export()
    {
        return Excel::download(new OrderExport(), 'order.xlsx');
    }
}
