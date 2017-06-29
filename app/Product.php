<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    static public function getProducts($category_url, &$data) {

        $data['products'] = [];

        if ($category = Categorie::where('url', '=', $category_url)->first()) {

            $category = $category->toArray();
            $data['title'] .= '|' . $category['title'] . 'products';
            $data['page_title'] = $category['title'] . 'products'; 
            $data['cat_url']=$category_url;
            if ($products = Categorie::find($category['id'])->products) {

                $data['products'] = $products->toArray();
            }
        }
    } 
    
    static public function getItem($product_url, &$data){  
        
        $data['item']=[];
        
        if( $product= Product::where('url', '=',$product_url)->first()){ 
            
            $product= $product->toArray();  
            $data['item']= $product; 
            $data['title'] .= '|' .$product['title'];
            
        }
    }

}
