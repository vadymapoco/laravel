<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tovary;

class TovaryController extends Controller

{
    public function index(){
    	$products = Tovary::all();
    	return $products;
    }

    public function look_asin(Request $request){
    	$uid = $request->uid;
    	$products = Tovary::where('fire_id', '=', $uid)->orderBy('tag', 'asc')->get();
    	return $products;
    }

    public function delete_asin(Request $request){
    	$uid = $request->uid;
    	$asin_id = $request->asin_id;
    	Tovary::where('fire_id', '=', $uid)->where('id_tovar','=', $asin_id)->delete();
    }

    public  function add_asin(Request $request){
    	
    	$uid = $request->uid;
    	$asin = $request->asin;
    	$tag = $request->tag;
    	$title = $request->title;
    	$group = $request->asin_group;
    	$img_src = $request->image_src;
    	
    	$product = new Tovary;
    		$product->fire_id = $uid; 
    		$product->asin = $asin;
    		$product->tag = $tag;
    		$product->title = $title;
    		$product->group_tovar = $group;
    		$product->image_src = $img_src;
    		$product->id_group_tovar = 0; 
    		$product->sku = '';
    		$product->bullet1 = '';
    		$product->bullet2 = '';
    		$product->bullet3 = '';
    		$product->bullet4 = '';
    		$product->bullet5 = '';
    		$product->description = '';

    	$product->save();
    	
    	$tovar = Tovary::where('asin', '=', $asin)->get();
    	return $tovar;
    }
}

