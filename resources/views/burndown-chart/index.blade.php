@extends('layouts.app')

@section('template_title')
    Burndown Chart
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Burndown Chart') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('burndown_charts.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Datos seguimiento Burndown chart</th>
										<th>Product owner Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($burndownCharts as $burndownChart)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $burndownChart->datosSeguimiento_BurndownChart }}</td>
											<td>{{ $burndownChart->productOwner->nombre_productOwner }}</td>

                                            <td>
                                                <form action="{{ route('burndown_charts.destroy',$burndownChart->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-success" href="{{ route('burndown_charts.edit',$burndownChart->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $burndownCharts->links() !!}
            </div>
        </div>
    </div>
@endsection
