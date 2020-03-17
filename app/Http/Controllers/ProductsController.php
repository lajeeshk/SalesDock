<?php

namespace App\Http\Controllers;


use App\Services\DbFilter;
use App\Services\RuleSelector;

class ProductsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $filter = new DbFilter('products');
        $products = $filter->buildQueryFromRule();
        $ruleDefinitions = RuleSelector::getAllFromFile();
 
        return view('product_list',compact('products','ruleDefinitions'));
    }
}
