<?php

namespace App\Http\Controllers\Api;

use App\Mail\OrderReceivedMail;
use App\Http\Controllers\Controller;
use App\Models\Order;
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
        $request->validate(
            [
                'guest_name' => 'required|string',
                'email' => 'required|string',
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
        $user_email = Auth::user()->email;
        Mail::to($user_email)->send($mail);

        return response()->json(['success' => 'true']);
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
