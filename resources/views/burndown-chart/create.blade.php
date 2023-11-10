@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Burndown Chart
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Burndown Chart</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('burndown_charts.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('burndown-chart.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
