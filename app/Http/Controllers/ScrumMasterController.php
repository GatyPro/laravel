<?php

namespace App\Http\Controllers;

use App\ScrumMaster;
use Illuminate\Http\Request;

/**
 * Class ScrumMasterController
 * @package App\Http\Controllers
 */
class ScrumMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scrumMasters = ScrumMaster::paginate();

        return view('scrum-master.index', compact('scrumMasters'))
            ->with('i', (request()->input('page', 1) - 1) * $scrumMasters->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $scrumMaster = new ScrumMaster();
        return view('scrum-master.create', compact('scrumMaster'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ScrumMaster::$rules);

        $scrumMaster = ScrumMaster::create($request->all());

        return redirect()->route('scrum_masters.index')
            ->with('success', 'ScrumMaster created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $scrumMaster = ScrumMaster::find($id);

        return view('scrum-master.edit', compact('scrumMaster'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ScrumMaster $scrumMaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ScrumMaster $scrumMaster)
    {
        request()->validate(ScrumMaster::$rules);

        $scrumMaster->update($request->all());

        return redirect()->route('scrum_masters.index')
            ->with('success', 'ScrumMaster updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $scrumMaster = ScrumMaster::find($id)->delete();

        return redirect()->route('scrum_masters.index')
            ->with('success', 'ScrumMaster deleted successfully');
    }
}