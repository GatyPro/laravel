<?php

namespace App\Http\Controllers;

use App\Models\Sprint;
use Illuminate\Http\Request;

/**
 * Class SprintController
 * @package App\Http\Controllers
 */
class SprintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sprints = Sprint::paginate();

        return view('sprint.index', compact('sprints'))
            ->with('i', (request()->input('page', 1) - 1) * $sprints->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sprint = new Sprint();
        return view('sprint.create', compact('sprint'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Sprint::$rules);

        $sprint = Sprint::create($request->all());

        return redirect()->route('sprints.index')
            ->with('success', 'Sprint created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sprint = Sprint::find($id);

        return view('sprint.show', compact('sprint'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sprint = Sprint::find($id);

        return view('sprint.edit', compact('sprint'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Sprint $sprint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sprint $sprint)
    {
        request()->validate(Sprint::$rules);

        $sprint->update($request->all());

        return redirect()->route('sprints.index')
            ->with('success', 'Sprint updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $sprint = Sprint::find($id)->delete();

        return redirect()->route('sprints.index')
            ->with('success', 'Sprint deleted successfully');
    }
}
