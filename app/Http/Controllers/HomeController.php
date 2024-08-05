<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
        $data = [
            'categories' => Category::all(),

            'products' => Product::orderByDesc('id')->paginate(3),

            'categoryCounts' => Category::leftJoin('products', 'categories.id', '=', 'products.category_id')
                ->select('categories.name as category_name', DB::raw('count(products.id) as product_count'))
                ->groupBy('categories.id', 'categories.name')
                ->get(),

            'posts' => DB::table('products')
                ->join('categories', 'products.category_id', '=', 'categories.id')
                ->select('products.name', 'products.img_thumbnail', 'products.created_at')
                ->where('categories.id', 5)
                ->orderBy('products.created_at')
                ->limit(3)
                ->get(),

            'culture' => DB::table('products')
                ->join('categories', 'products.category_id', '=', 'categories.id')
                ->select('products.name', 'products.img_thumbnail', 'products.overview', 'products.created_at')
                ->where('categories.id', 9)
                ->orderBy('products.created_at')
                ->limit(3)
                ->get()
        ];

        return view('clients.home', $data);
    }

    public function show(string $id)
    {

        $data = Product::query()->find($id);
        // Truy vấn các bài tin tức liên quan
        $relatedNews = Product::query()
            ->where('category_id', $data->category_id) // Điều kiện: cùng category_id
            ->where('id', '!=', $id) // Điều kiện: khác id của bài tin tức hiện tại
            ->limit(5) // Giới hạn số lượng bài tin tức liên quan (5 bài tin tức)
            ->get();
        return view('clients.' . __FUNCTION__, compact('data', 'relatedNews'));
    }

    public function social()
    {
        $data = Product::join('categories', 'products.category_id', '=', 'categories.id')
            ->where('categories.id', 9)
            ->select('products.*')
            ->get();
        return view('clients.social-news', compact('data'));
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $categories = Category::where('name', 'like', "%$keyword%")->get();

        $products = [];
        foreach ($categories as $category) {
            $categoryProducts = $category->products()->get();
            $products = array_merge($products, $categoryProducts->toArray());
        }

        return view('clients.search', compact('keyword', 'products'));
    }
}
