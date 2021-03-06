<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Categorie;
use App\Product;

class ShopController extends MainController{
    
   public function categories(){ 
       self::$data['categories'] = Categorie::all()->toArray(); 
       self::$data['title'] .='|Shop categories'; 
       return view('content.categories', self::$data);
   } 
   
   public function products($category_url){ 
       
      Product::getProducts($category_url, self::$data); 
      return view('content.products', self::$data);
   } 
   
   public function item($category_url, $product_url){ 
       
       Product::getItem($product_url, self::data); 
       return view('content.item', self::$data);
   }
}
