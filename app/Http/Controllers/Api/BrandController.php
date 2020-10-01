<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\ProductBrand;
use App\Http\Controllers\Controller;
use App\Repositories\BrandRepository;

class BrandController extends Controller
{
    protected $brandRepository;

    public function __construct(BrandRepository $repository){
        $this->brandRepository = $repository;
    }

    public function index()
    {
        return api_success(
            array('data' => $this->brandRepository->all())
        );
    }


    public function show($id)
    {
        return api_success(
            array('data' => $this->brandRepository->find($id)->products)
        );
    }

    public function search(Request $request, $id){
        $product_brand = ProductBrand::find($id);
        $products = $product_brand->products->where('name', 'like', "%$key_word%");
        return api_success(
            array('data' => $brand->products)
        );
    }
}
