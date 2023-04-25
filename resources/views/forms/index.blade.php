@extends('layouts.app')

@section('content')
    <div class="container-justify">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">В/ч (формування)</th>
                            <th scope="col">Відповідальна особа</th>
                            <th scope="col">Громада</th>
                            <th scope="col">№</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($needs as $need)
                        <tr>
                            <th><a class="text-dark"  href="{{route('form.show', $need->id)}}">{{$need->formation}}</a></th>
                            <td><a class="text-dark" href="{{route('form.show', $need->id)}}">{{$need->responsible}}</a></td>
                            <td><a class="text-dark" href="{{route('form.show', $need->id)}}">{{$need->community}}</a></td>
                            <td><a class="text-dark" href="{{route('form.show', $need->id)}}">{{$need->number}}</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
