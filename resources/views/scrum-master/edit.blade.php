@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Scrum Master
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Scrum Master</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('scrum_masters.update', $scrumMaster->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('scrum-master.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
