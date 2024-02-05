<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categorie;
use App\Models\Tage;
use App\Models\ProductTag;

class ProductController extends Controller
{
    public function index(){
        $products = Product::with('category')->with('tage')->get();
        $TagList = [];
        foreach($products as $product){
            foreach($product['tage'] as $tages){
                $TagList[$tages['product_id']][]=Tage::where('id',$tages['tage_id'])->get()[0];
            }
        }
        $categories = Categorie::all();
        $tages = Tage::all();
        return view("product",compact('products','categories','tages','TagList'));
    }
    public function add(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'tages_id' => '',
        ]);
        $product = Product::create($validatedData);
        $lastInsertedId = $product->id;
        foreach($validatedData['tages_id'] as $dataTage){
            $tages = [
                'tage_id' => $dataTage,
                'product_id' => $lastInsertedId,
            ];
            ProductTag::create($tages);
        }
        return redirect('/Products');
    }
    public function delet($id){
        Product::find($id)->delete();
        return redirect('/Products');
    }
    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'tages_id' => '',
        ]);
        Product::where('id',$id)->update([
            'name' => $validatedData['name'],
            'price' => $validatedData['price'],
            'description' => $validatedData['description'],
            'category_id' => $validatedData['category_id'],
        ]);
        ProductTag::where('product_id',$id)->delete();
        foreach($validatedData['tages_id'] as $dataTage){
            $tages = [
                'tage_id' => $dataTage,
                'product_id' => $id,
            ];
            ProductTag::create($tages);
        }
        
        return redirect('/Products');
    }

}
