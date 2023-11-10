@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Scrum Master
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Scrum Master</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('scrum_masters.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('scrum-master.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
