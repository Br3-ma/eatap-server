<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products(){
        $products = Product::get();
        return response()->json(['products' => $products], 200);
    }

    public function store(){

    }

    public function show($id){

    }

    public function edit($id){

    }

    public function update(){

    }

    public function destroy(){

    }

    public function search(){

    }

    public function filter(){

    }

    public function sort(){

    }

    public function paginate(){

    }

    public function addToCart(){

    }

    public function removeFromCart(){

    }

    public function related(){

    }

    public function similar(){

    }

    public function recommended(){

    }

    public function featured(){

    }

    public function topRated(){

    }

    public function newItems(){

    }

    public function bestSellers(){

    }

    public function trending(){

    }

    public function onSale(){

    }

    public function inStock(){

    }

    public function outOfStock(){

    }

    public function lowStock(){

    }

    public function outOfStockNotification(){

    }

    public function notifyWhenAvailable(){

    }

    public function addReview(){

    }

    public function deleteReview(){

    }

    public function editReview(){

    }

    public function reportReview(){

    }

    public function getReviews(){

    }

    public function getAverageRating(){

    }

    public function getRatingDistribution(){

    }

    public function addToWishlist(){

    }

    public function removeFromWishlist(){

    }

    public function getWishlist(){

    }

    public function isOnWishlist(){

    }

    public function syncStock(){

    }

    public function import(){

    }

    public function export(){

    }

    public function restore(){

    }

    public function forceDelete(){

    }

    public function bulkDelete(){

    }
}

