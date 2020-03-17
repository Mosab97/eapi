<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReviewResource;
use App\Product;
use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(Product $product)
    {
        return ReviewResource::collection($product->reviews);
    }
}
