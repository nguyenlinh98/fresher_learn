<?php

namespace Model\Base;

abstract class BaseModel
{
    abstract public function find();
    abstract public function create(array $data);
    abstract public function update(array $data,$id);
    abstract public function delete(array $data);

}