<?php

namespace App\Services\Midtrans;

use Midtrans\Snap;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CreateSnapTokenService extends Midtrans
{
    protected $order;

    public function __construct($order)
    {
        parent::__construct();

        $this->order = $order;
    }

    public function getSnapToken()
    {
        $user = Auth::user();
        $data = User::where('id', '=', $user->id)->first();
        // dd($this->order);
        // dd( $this->order->number);
        $params = [
            'transaction_details' => [
                'order_id' => $this->order->number,
                'gross_amount' => $this->order->total_price,
            ],
            'item_details' => [
                [
                    'id' => 1,
                    'price' => $this->order->total_price,
                    'quantity' => 1,
                    'name' => $this->order->order_name,
                ],
            ],
            'customer_details' => [
                'first_name' => $data->name ,
                'email' => $data->email ,
                // 'phone' => '081234567890',
            ]
        ];

        $snapToken = Snap::getSnapToken($params);

        return $snapToken;
    }
}
