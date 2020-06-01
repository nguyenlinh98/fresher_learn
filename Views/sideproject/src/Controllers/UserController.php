<?php

namespace App\Controllers;

use App\Models\User;
use App\Controllers\BaseController;
use Framework\Components\Request;

class UserController extends BaseController
{
    public $user;

    public $request;

     public function __construct()
     {
         $this->user = new User();
         $this->request =new Request();
     }

     public function listUser()
     {

         $list = $this->user->all();
         $this->render('User/listUser','list',$list);
     }

     public function create(){
         $this->render("User/addUser");
     }

     public function store(){

         $request = $this->request->getRequestPost();
         $name = $request['name'];
         $email =$request['email'];
         $status =$request['status'];
         $result = $this->user->create($request);
         header("Location:index.php?controllers=User&&action=listUser");
     }

     public function showUpdate()
     {

         $id = $this->request->getRequestGet('id');

         $result = $this->user->find($id)->get();

         $this->render('User/editUser','result',$result);
     }

    public function update()
    {
        $request = $this->request->getRequestPost();
        $id = $request['id'];
        $result = $this->user->update($request,$id);
        header("Location:index.php?controllers=User&&action=listUser");


    }
}