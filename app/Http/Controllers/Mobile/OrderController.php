<?php

namespace App\Http\Controllers\Mobile;

use App\Models\Cart;
use App\Models\Payment;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function getOrders(Request $request)
    {
        $data = DB::table('payments')->where('user_id', $request->id)->where('product_id', '!=', NULL)->get();
        return $data;
    }

    public function cancelOrder(Request $request)
    {
        $payment = Payment::find('id', $request->id);

        // store each cart item
        $cart_ids = json_decode($payment->product_id);

        foreach ($cart_ids as $cart_Id) {
            $cart_item = Cart::find($cart_Id);

            Product::where('id', $cart_item->product_id)->increment('stocks', $cart_item->quantity );
        }

        $payment->delete();

        // DB::table('payments')
        //     ->where('id', $request->id)
        //     ->delete();
    }
}
