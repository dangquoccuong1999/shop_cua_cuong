<?php


namespace App\Http\Controllers\Repository;


abstract class RepositoryEloquent
{
    public $model;

    public function __construct()
    {
        $this->getModel();
    }

    public function getModel()
    {
          return $this->model = app()->make($this->setModel());
    }

    abstract public function setModel();

    public function index()
    {
        $product = $this->model->all();
        return $product;
    }
}
