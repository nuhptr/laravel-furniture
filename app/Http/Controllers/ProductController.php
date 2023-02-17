<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;

use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        if (request()->ajax()) {
            $query = Product::query();

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                    <a href="' . route('dashboard.product.edit', $item->id) . '" 
                       class="bg-gray-500 text-white rounded-md px-2 py-1 m-2"> 
                        Edit 
                    </a>
                    <form class="inline-block" action="' . route('dashboard.product.destroy', $item->id) . '" method="POST">
                        <button class="bg-red-500 text-white rounded-md px-2 py-1 m-2">
                            Hapus
                        </button>
                        ' . method_field('delete') . csrf_field() . '
                    </form>
                    ';
                })
                ->editColumn('price', function ($item) {
                    return number_format($item->price);
                })
                ->rawColumns(['action'])
                ->make();
        }

        return view('pages.dashboard.product.index');
    }

    // @return create product dashboard view
    public function create()
    {
        return view('pages.dashboard.product.create');
    }

    // Store a newly created resource in storage.
    public function store(ProductRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);

        Product::create($data);

        return redirect()->route('dashboard.product.index');
    }

    // @return edit product dashboard with send $product as item
    public function edit(Product $product)
    {
        return view('pages.dashboard.product.edit', [
            'item' => $product
        ]);
    }

    // Update the specified resource in storage.
    public function update(ProductRequest $request, Product $product)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);

        $product->update($data);

        return redirect()->route('dashboard.product.index');
    }

    // Remove the specified resource from storage.
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('dashboard.product.index');
    }
}
