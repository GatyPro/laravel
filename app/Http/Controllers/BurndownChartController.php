<?php

namespace App\Http\Controllers;

use App\Models\BurndownChart;
use Illuminate\Http\Request;
use App\Models\ProductOwner;

/**
 * Class BurndownChartController
 * @package App\Http\Controllers
 */
class BurndownChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $burndownCharts = BurndownChart::paginate();

        return view('burndown-chart.index', compact('burndownCharts'))
            ->with('i', (request()->input('page', 1) - 1) * $burndownCharts->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $burndownChart = new BurndownChart();
        $po = ProductOwner::all();
        return view('burndown-chart.create', compact('burndownChart','po'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(BurndownChart::$rules);

        $burndownChart = BurndownChart::create($request->all());

        return redirect()->route('burndown_charts.index')
            ->with('success', 'Burndown Chart created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $burndownChart = BurndownChart::find($id);
        $po = ProductOwner::all();

        return view('burndown-chart.edit', compact('burndownChart','po'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  BurndownChart $burndownChart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BurndownChart $burndownChart)
    {
        request()->validate(BurndownChart::$rules);

        $burndownChart->update($request->all());

        return redirect()->route('burndown_charts.index')
            ->with('success', 'Burndown Chart updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $burndownChart = BurndownChart::find($id)->delete();

        return redirect()->route('burndown_charts.index')
            ->with('success', 'Burndown Chart deleted successfully');
    }
}