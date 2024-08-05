<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::query()->with('category')->latest('id')->paginate(5);

        return view('admin.product.' . __FUNCTION__, compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::query()->pluck('name', 'id')->all();

        return view('admin.product.' . __FUNCTION__, compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('img_thumbnail');

        if ($request->hasFile('img_thumbnail')) {
            $data['img_thumbnail'] = Storage::put('product', $request->file('img_thumbnail'));
        }
        Product::query()->create($data);
        return redirect()->route('product.index');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $model = Product::query()->findOrFail($id);
        return view('admin.product.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::query()->pluck('name', 'id')->all();

        return view('admin.product.edit', compact('categories', 'product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $model = Product::query()->findOrFail($id);

        $data = $request->except('img_thumbnail');


        if ($request->hasFile('img_thumbnail')) {
            $data['img_thumbnail'] = Storage::put('product', $request->file('img_thumbnail'));
        }

        $currentImgThumb = $model->img_thumbnail;
        $model->update($data);
        if (
            $request->hasFile('img_thumbnail')
            &&  $currentImgThumb
            && Storage::exists($currentImgThumb)
        ) {
            Storage::delete($currentImgThumb);
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Product::query()->findOrFail($id);

        $data->delete();

        if ($data->img_thumbnail && Storage::exists($data->img_thumbnail)) {
            Storage::delete($data->img_thumbnail);
        }

        return back();
    }
}
