<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    //

    public function __construct()
    {
    	# code...
    	$this->middleware('auth');
    }

    public function uploadFile($file, $path, $productName,$type)
    {
        # code...
        $path = $path.$productName."/";
        File::makeDirectory($path, $mode = 0777, true, true);
        $img = imagecreatefromjpeg($image);
        $img = imagescale($img, 200, 200);
        imagejpeg($img,$path.$productName.'_'.$type.'.jpeg');
        return $path;
    }


    public function add(Request $request)
    {
    	# code...
    	$input = $request->except('_token');

    	$path='front/products/';

    	if ($request->hasFile('product_background_image')){
    		$file = $request->file('product_background_image');
    		$input['product_background_image_path'] = $this->uploadFile($file,$path,$input['product_name'],"background");

    	}
    	if ($request->hasFile('product_text_image')){
    		$file = $request->file('product_text_image');
    		$input['product_text_image'] = $this->uploadFile($file,$path,$input['product_name'],"text");
    	}
    	if ($request->hasFile('product_image')){
    		$file = $request->file('product_image');
    		$input['product_text_image'] = $this->uploadFile($file,$path,$input['product_name'],"product");
    	}

    	
    	Product::create($input);

    }
}
