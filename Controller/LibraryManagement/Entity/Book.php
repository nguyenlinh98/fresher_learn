<?php
require_once ("Athor.php");
Abstract class Book
{
    public $id;
    public $tittle;
    public $idAuthor;
    public $producer;
    public $year;
    public $price;
    public $idCata;
    public $description;
    public $inStock;

    protected function getTittle(){
        return $this->tittle;
    }
    protected function getAthorByIdAuthor($idAuthor){

    }

}