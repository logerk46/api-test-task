<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    public function new_order(Request $request){
        //$headers = [ 'Content-Type' => 'application/json; charset=utf-8' ];
        $order = request('order');
        $email_message = 'To: email \n Subject: Событие \n Body:'.$order.' Поступил новый заказ № '.$order."\n Ссылка на заказ ".url('/')."/order/view/".$order;

        //#return response()->json($email_message,200,$headers,JSON_UNESCAPED_UNICODE);
        Log::info($email_message);
    }

    public function new_transaction(Request $request){
        $card = request('card');
        $amount = request('amount');

        Log::info("Номер карты ".$card." и счет ".$amount);

    }
}
