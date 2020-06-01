<?php


namespace App\Models;
use App\Models\BaseModel;


class Product extends BaseModel
{
    protected $table ='product';
    protected $fillable = ['id','name','price','desription','satus','idCate','created_at','updated_at'];


}