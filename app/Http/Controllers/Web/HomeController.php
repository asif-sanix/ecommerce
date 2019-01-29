<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Model\Admin\Product;
use Illuminate\Http\Request;
use App\Model\Admin\ProductInventory;
use App\Model\Admin\ProductImage;
class HomeController extends Controller
{
    //

     function index(){
    	$products = Product::select('id','name','slug','body')->with(['inventories'=>function($query){
    		$query->select('id','product_id','mrp','msp','stock','sku');
    		$query->with(['images'=>function($query){
            $query->select('id','inventory_id','files');
    		}]);
    	}])->get();

    	return view('web.home',compact('products'));
    }
}
