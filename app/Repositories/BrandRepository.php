<?php
namespace App\Repositories;

use App\Models\Brand;

class BrandRepository {

    protected $brand;

    public function __construct(Brand $brand){
        $this->brand = $brand;
    }

    public function all(){
        return $this->brand->all();
    }

    public function find($id){
        return $this->findOrFail($id);
    }

    public function create($attributes){
        return $this->brand->create($attributes);
    }

    public function update($attributes){
        return $this->brand->update($attributes);
    }

    public function delete($id){
        return $this->brand->destroy($attributes);
    }
}
