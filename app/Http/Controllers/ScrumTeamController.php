<?php

namespace App\Http\Controllers;

use App\Models\ScrumTeam;
use App\Models\Sprint;
use Illuminate\Http\Request;

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
        $scrumTeams = ScrumTeam::paginate();

        return view('scrum-team.index', compact('scrumTeams'))
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
        $sprints = Sprint::all();
        return view('scrum-team.create', compact('scrumTeam', 'sprints'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ScrumTeam::$rules);

        $scrumTeam = ScrumTeam::create($request->all());

        return redirect()->route('scrum_teams.index')
            ->with('success', 'scrumTeam created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $scrumTeam = ScrumTeam::find($id);
        $sprints = Sprint::all();

        return view('scrum-team.edit', compact('scrumTeam','sprints'));
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
        request()->validate(ScrumTeam::$rules);

        $scrumTeam->update($request->all());

        return redirect()->route('scrum_teams.index')
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

        return redirect()->route('scrum_teams.index')
            ->with('success', 'scrumTeam deleted successfully');
    }
}