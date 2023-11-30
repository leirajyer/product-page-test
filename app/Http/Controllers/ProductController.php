<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function index()
    {
        $url = 'http://localhost:8001/client/products/fall-limited-edition-sneakers';

        // Make the HTTP request
        $response = Http::get($url);

        // Check if the request was successful (status code 2xx)
        if ($response->successful()) {
            $productData = $response->json()['data'];
            return view('app', ['product' => $productData]);
        } else {
            // Handle the error, e.g., log it or return an error response
            return response()->json(['error' => 'Failed to retrieve product'], $response->status());
        }
    }
}
