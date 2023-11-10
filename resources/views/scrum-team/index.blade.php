@extends('layouts.app')

@section('template_title')
    Scrum Team
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Scrum Team') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('scrum_teams.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombre</th>
										<th>Sprint Id</th>
										<th>Sprint actual</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($scrumTeams as $scrumTeam)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $scrumTeam->nombre }}</td>
											<td>{{ $scrumTeam->sprint_id }}</td>
											<td>{{ $scrumTeam->SprintActual }}</td>

                                            <td>
                                                <form action="{{ route('scrum_teams.destroy',$scrumTeam->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-success" href="{{ route('scrum_teams.edit',$scrumTeam->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $scrumTeams->links() !!}
            </div>
        </div>
    </div>
@endsection
