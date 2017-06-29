<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends MainController 
{ 
    
    
    public function home(){  
        self::$data['title'] .='|Home page';
        return view ('content.home',self::$data);
    } 
    
    public function about(){  
        self::$data['title'] .='|About';
        return view('content.about',self::$data);
    
} 

}
