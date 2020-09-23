<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\ProductBrand;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    public function index()
    {
        return api_success(
            array('data' => ProductBrand::all())
        );
    }


    public function show($id)
    {
        $brand = ProductBrand::findOrFail($id);
        return api_success(
            array('data' => $brand->products)
        );
    }

    public function search(Request $request, $id){
        $product_brand = ProductBrand::find($id);
        $products = $product_brand->products->where('name', 'like', '%q%');
        return api_success(
            array('data' => $brand->products)
        );
    }
}
