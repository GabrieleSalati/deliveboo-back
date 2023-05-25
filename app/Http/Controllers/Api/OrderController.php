<?php

namespace App\Http\Controllers\Api;

use App\Models\Restaurant;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\DB;


use App\Mail\OrderReceivedMail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $orders = Order::where('status', 1);
        $orders = Order::all();
        return response()->json(compact('orders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'guest_name' => 'required|string',
                'email' => 'required|string|email',
                'address' => 'required|string',
                'telephone' => 'nullable|string',
                'total_bill' => 'required',
                'bill_no_shipping' => 'required',
            ]
        );

        $order = new Order;
        $order->fill($request->all());
        $order->save();

        $mail = new OrderReceivedMail($order);
        $restaurant = DB::table('restaurants')->find($request->restaurant_id);

        $user_data = DB::table('users')->find($restaurant->user_id);

        Mail::to([$order->email, $user_data->email])->send($mail);

        return response()->json($order);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
    public function destroy($id)
    {
        //
    }
}
