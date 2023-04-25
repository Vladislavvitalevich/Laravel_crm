@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Дякуємо {{ $name }}!</h4>
                        <p>Всі данні успішно збереженні!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
