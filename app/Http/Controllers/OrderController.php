<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\Midtrans\CreateSnapTokenService;

class OrderController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $orders = Order::where('user_id', '=', $user->id)->get();

        return view('orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        $snapToken = $order->snap_token;
        if (is_null($snapToken)) {
            // Jika snap token masih NULL, buat token snap dan simpan ke database

            $midtrans = new CreateSnapTokenService($order);
            $snapToken = $midtrans->getSnapToken();

            $order->snap_token = $snapToken;
            $order->save();
        }

        return view('orders.show', compact('order', 'snapToken'));
    }
}
