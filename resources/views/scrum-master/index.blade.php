@extends('layouts.app')

@section('template_title')
    Scrum Master
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Scrum Master') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('scrum_masters.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombre Scrum master</th>
										<th>Certificacion Scrum master</th>
										<th>Contacto Scrum master</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($scrumMasters as $scrumMaster)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $scrumMaster->nombre_scrumMaster }}</td>
											<td>{{ $scrumMaster->certificacion_scrumMaster }}</td>
											<td>{{ $scrumMaster->contacto_scrumMaster }}</td>

                                            <td>
                                                <form action="{{ route('scrum_masters.destroy',$scrumMaster->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-success" href="{{ route('scrum_masters.edit',$scrumMaster->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $scrumMasters->links() !!}
            </div>
        </div>
    </div>
@endsection
