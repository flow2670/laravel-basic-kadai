<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
<<<<<<< HEAD
use App\Models\Product;
=======
>>>>>>> c3213fed4b46b6290d4ae089d7c5c4ab997e1e17

class ProductController extends Controller
{
    public function index()
    {
        // productsテーブルからすべてのデータを取得し、変数$productsに代入する
        $products = DB::table('products')->get();

        //変数$productsをproducts/index.blade.phpファイルに渡す
        return view('products.index', compact('products'));
    }
<<<<<<< HEAD

    public function show($id)
    {
        // URL'/products/{id}'の{id}'部分と主キー（idカラム）の値が一致するデータをproductテーブルから取得し、変数$productに代入する
        $product = Product::find($id);

        // 変数$productを$products/show.blade.phpファイルに渡す
        return view('products.show', compact('product'));
    }
=======
>>>>>>> c3213fed4b46b6290d4ae089d7c5c4ab997e1e17
}
