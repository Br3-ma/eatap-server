<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $req){
        try {
            $cart = Cart::create([
                'user_id' => $req->input('name'),
                'picker_id' => $req->input('name'),
                'type' => $req->input('name'),
                'status' => $req->input('name'),
                'state' => $req->input('name'),
                'service_total' => $req->input('name'),
                'total' => $req->input('name')
            ]);

            foreach ($req->input('name') as $key => $value) {
                CartItem::create([
                    'cart_id' => $req->input('name'),
                    'product_id' => $req->input('name'),
                    'qty' => $req->input('name'),
                ]);
            }
            return response()->json(['data' => $cart], 200);
        } catch (\Throwable $th) {
            return response()->json(['data' => $th->getMessage()], 500);
        }
    }

    public function remove(){

    }

    public function view(){

    }

    public function update(){

    }

    public function clear(){

    }

    public function count(){

    }

    public function total(){

    }

    public function isEmpty(){

    }

    public function items(){

    }

    public function hasItem(){

    }

    public function getItem(){

    }

    public function hasItems(){

    }

    public function setItemQuantity(){

    }

    public function getItemQuantity(){

    }

    public function incrementItemQuantity(){

    }

    public function decrementItemQuantity(){

    }

    public function getItemPrice(){

    }

    public function getItemSubtotal(){

    }

    public function getItemTotal(){

    }

    public function hasItemWithPrice(){

    }

    public function getTotalItems(){

    }

    public function getTotalUniqueItems(){

    }

    public function getTotalQuantity(){

    }

    public function isEmptyItems(){

    }

    public function merge(){

    }

    public function toArray(){

    }
}
