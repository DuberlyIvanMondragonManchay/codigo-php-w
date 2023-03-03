@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('company_registration') }}" name="" id="" class="btn btn-primary">Busco talento </a>
        </div>
        <div class="col-md-6">
            <a href="{{ route('applicant_registration') }}" name="" id="" class="btn btn-primary">Soy postulante</a>
        </div>
    </div>
    
 

@endsection