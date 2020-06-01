<?php


namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BaseModel;
use App\Models\Categories;
use Framework\Components\Request;


class CategoriesController extends BaseController
{
    protected $category;
    protected $request;
     public function __construct()
     {
         $this->category = new Categories();
         $this->request =new Request();
     }

     public function listCategories(){

         $category = $this->category->all();
         $this->render("Category/ListCategories",'category',$category);

     }
     public function create()
     {
         $this->render("Category/addCategories");
     }

     public function store(){
         $request = $this->request->getRequestPost();
         $name = $request['name'];
         $status =$request['status'];

         $result = $this->category->create($request);
         header("Location:index.php?controllers=Categories&&action=listCategories");

     }
     public function showUpdate()
     {
         $id = $this->request->getRequestGet('id');

         $result = $this->category->find($id)->get();

         $this->render('Category/editCategories','result',$result);
     }

     public function update()
     {
         $request = $this->request->getRequestPost();
         $id = $request['id'];

         $result = $this->category->update($request,$id);
         header("Location:index.php?controllers=Categories&&action=listCategories");

     }
    public function formatCondition(array $arr){
        $condition = "(";
        foreach ($arr as $value) {
            $condition .= "'$value',";
        }
        $condition = substr($condition, 0, -1);
        $condition .= ")";
        return $condition;
    }

    public function delete()
     {
         $id = $this->request->getRequestGet('id');
         $result =$this->category->delete($id);

         header("Location:index.php?controllers=Categories&&action=listCategories");
     }
     
    public function deleteByCondition(){
        $listId = $this->request->getRequestPost("listId");
        $condition = $this->formatCondition($listId);
        $this->category->deletebyCondition("id IN $condition");
    }

}