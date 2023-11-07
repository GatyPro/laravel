<?php

namespace App\Http\Controllers;

use App\Models\ProductBacklog;
use App\Models\Task;
use Illuminate\Http\Request;

/**
 * Class ProductBacklogController
 * @package App\Http\Controllers
 */
class ProductBacklogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ProductBacklogs = ProductBacklog::paginate();

        return view('product-backlog.index', compact('ProductBacklogs'))
            ->with('i', (request()->input('page', 1) - 1) * $ProductBacklogs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $task = Task::all();
        $ProductBacklog = new ProductBacklog();
        return view('product-backlog.create', compact('ProductBacklog', 'task'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $ProductBacklog = ProductBacklog::create($request->all());

        return redirect()->route('product_backlogs.index')
            ->with('success', 'ProductBacklog created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ProductBacklog = ProductBacklog::find($id);

        return view('product-backlog.show', compact('ProductBacklog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::all();

        $ProductBacklog = ProductBacklog::find($id);

        return view('product-backlog.edit', compact('ProductBacklog', 'task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ProductBacklog $ProductBacklog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductBacklog $ProductBacklog)
    {
        request()->validate([
            'nombre_productbacklog' => 'required',
            'tarea' => 'required',
        ]);

        $ProductBacklog->update($request->all());

        return redirect()->route('product_backlogs.index')
            ->with('success', 'ProductBacklog updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ProductBacklog = ProductBacklog::find($id)->delete();

        return redirect()->route('product_backlogs.index')
            ->with('success', 'ProductBacklog deleted successfully');
    }
}