@extends('layouts.app')

@section('template_title')
    {{ $productOwner->name ?? "{{ __('Show') Product Owner" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Product Owner</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('product-owners.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Productowner:</strong>
                            {{ $productOwner->nombre_productOwner }}
                        </div>
                        <div class="form-group">
                            <strong>Experiencia Productowner:</strong>
                            {{ $productOwner->experiencia_productOwner }}
                        </div>
                        <div class="form-group">
                            <strong>Contacto Productowner:</strong>
                            {{ $productOwner->contacto_productOwner }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
