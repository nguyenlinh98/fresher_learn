<?php


namespace App\Controllers;

 use App\Controllers\BaseController;
 use App\Models\Product;
 use Framework\Components\Request;


class ProductController extends BaseController
{
    protected $product;
    protected $request;

    public function __construct()
    {
        $this->product = new Product();
        $this->request =new Request();
    }
     public function listProduct()
     {
         $listProduct = $this->product->all();
         $this->render('Product/listProduct','listProduct',$listProduct);
     }
     public function create()
     {
         $this->render('Product/addProduct');
     }
      public function showUpdate()
      {
          $id = $this->request->getRequestGet('id');

          $result = $this->product->find($id)->get();

          $this->render('Product/editProduct','result',$result);
      }
      public function delete()
      {

      }

}