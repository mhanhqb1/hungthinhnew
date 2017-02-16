<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\ORM\TableRegistry;

class NewsController extends AppController
{
    public function index()
    {
        $products = TableRegistry::get('News');
        $q = $products->find('All');
        $result = $q->toArray();
    }
}