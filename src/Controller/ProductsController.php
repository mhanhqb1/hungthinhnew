<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\ORM\TableRegistry;

class ProductsController extends AppController
{
    public function index()
    {
        $products = TableRegistry::get('Products');
    }
}