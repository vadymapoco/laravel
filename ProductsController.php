<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
    	$products = Product::all();
    	return $products;
    }

    public function look_asin($uid){
    	$products = Product::where('fire_id', '=', $uid)->orderBy('tag', 'asc')->get();
    	return $products;
    }

    public function delete_asin($uid,  $id_tovar){
    	Product::where('fire_id', '=', $uid)->where('id_tovar','=', $id_tovar)->delete();
    }

    public  function add_asin(Request $request){
    	
    	$uid = $request->uid;
    	$asin = $request->asin;
    	$tag = $request->tag;
    	$title = $request->title;
    	$group = $request->asin_group;
    	$img_src = $request->image_src;
    	
    	$product = new Product;
    		$product->fire_id = $uid; 
    	/*	$product->asin = $asin;
    		$product->tag = $tag;
    		$product->title = $title;
    		$product->group_tovar = $group;
    		$product->image_src = $img_src;
    	*/
    	$product->save();
    	//$first = Product::first();
    	//return $first;
    }
}
