<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\TransactionItem;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TransactionController extends Controller
{
    //  Display a listing of the resource.
    public function index()
    {
        if (request()->ajax()) {
            $query = Transaction::query();

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                    <a href="' . route('dashboard.transaction.show', $item->id) . '" 
                       class="bg-green-500 text-white rounded-md px-3 py-2 m-2"> 
                        Show 
                    </a>
                    <a href="' . route('dashboard.transaction.edit', $item->id) . '" 
                       class="bg-gray-500 text-white rounded-md px-3 py-2 m-2"> 
                        Edit 
                    </a>
                    ';
                })
                ->editColumn('total_price', function ($item) {
                    return number_format($item->total_price);
                })
                ->rawColumns(['action'])
                ->make();
        }

        return view('pages.dashboard.transaction.index');
    }


    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        //
    }

    // Display the specified resource.
    public function show(Transaction $transaction)
    {
        if (request()->ajax()) {
            $query = TransactionItem::with(['product'])->where('transaction_id', $transaction->id);

            return DataTables::of($query)
                ->editColumn('product.price', function ($item) {
                    return number_format($item->product->price);
                })
                ->rawColumns(['action'])
                ->make();
        }

        return view('pages.dashboard.transaction.show', compact('transaction'));
    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        return route('pages.dashboard.transaction.edit');
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        //
    }
}
