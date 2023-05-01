@extends('layouts.app')

@section('content')
    <div class="container-justify">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="alert alert-danger" role="alert">
                    <h1>Помилка</h1>
                    {{$error}}
                </div>
            </div>
        </div>
    </div>
@endsection
