<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    protected $fillable = ['product_name','price','product_description',
    'product_freeShipping','product_shipping_charges','product_text_image',
    'product_text_image_path','product_background_image','product_background_image_path','category_id','product_image','product_image_path', 'final_product_image', 'final_product_image_path',
    'product_image_json'];

    
}
