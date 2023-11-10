<?php

namespace App\Http\Controllers;

use App\Models\ProductOwner;
use Illuminate\Http\Request;

/**
 * Class ProductOwnerController
 * @package App\Http\Controllers
 */
class ProductOwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productOwners = ProductOwner::paginate();

        return view('product-owner.index', compact('productOwners'))
            ->with('i', (request()->input('page', 1) - 1) * $productOwners->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productOwner = new ProductOwner();
        return view('product-owner.create', compact('productOwner'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ProductOwner::$rules);

        $productOwner = ProductOwner::create($request->all());

        return redirect()->route('product_owners.index')
            ->with('success', 'ProductOwner created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productOwner = ProductOwner::find($id);

        return view('product-owner.show', compact('productOwner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productOwner = ProductOwner::find($id);

        return view('product-owner.edit', compact('productOwner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ProductOwner $productOwner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductOwner $productOwner)
    {
        request()->validate(ProductOwner::$rules);

        $productOwner->update($request->all());

        return redirect()->route('product_owners.index')
            ->with('success', 'ProductOwner updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $productOwner = ProductOwner::find($id)->delete();

        return redirect()->route('product_owners.index')
            ->with('success', 'ProductOwner deleted successfully');
    }
}