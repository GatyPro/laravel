<?php

namespace App\Http\Controllers;

use App\Models\scrumTeam;
use Illuminate\Http\Request;
use App\Http\Requests\StorescrumTeamRequest;
use App\Http\Requests\UpdatescrumTeamRequest;

/**
 * Class scrumTeamController
 * @package App\Http\Controllers
 */
class ScrumTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scrumTeams = scrumTeam::paginate();

        return view('scrumTeam.index', compact('scrumTeams'))
            ->with('i', (request()->input('page', 1) - 1) * $scrumTeams->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $scrumTeam = new scrumTeam();
        return view('scrumTeam.create', compact('scrumTeam'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(scrumTeam::$rules);

        $scrumTeam = scrumTeam::create($request->all());

        return redirect()->route('scrumTeams.index')
            ->with('success', 'scrumTeam created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $scrumTeam = scrumTeam::find($id);

        return view('scrumTeam.show', compact('scrumTeam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $scrumTeam = scrumTeam::find($id);

        return view('scrumTeam.edit', compact('scrumTeam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  scrumTeam $scrumTeam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, scrumTeam $scrumTeam)
    {
        request()->validate(scrumTeam::$rules);

        $scrumTeam->update($request->all());

        return redirect()->route('scrumTeams.index')
            ->with('success', 'scrumTeam updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $scrumTeam = scrumTeam::find($id)->delete();

        return redirect()->route('scrumTeams.index')
            ->with('success', 'scrumTeam deleted successfully');
    }
}