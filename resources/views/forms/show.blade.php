@extends('layouts.app')

@section('content')
    <div class="container-justify">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item active" aria-current="true">В/ч (формування)</li>
                            <li class="list-group-item">{{$need->formation}}</li>
                            <li class="list-group-item active" aria-current="true">Відповідальна особа</li>
                            <li class="list-group-item">{{$need->responsible}}</li>
                            <li class="list-group-item active" aria-current="true">Громада</li>
                            <li class="list-group-item">{{$need->community}}</li>
                            <li class="list-group-item active" aria-current="true">№</li>
                            <li class="list-group-item">{{$need->number}}</li>
                            <li class="list-group-item active" aria-current="true">Створенно</li>
                            <li class="list-group-item">{{$need->created_at->format('d m Y H:i')}}</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Наіменування</th>
                                <th scope="col">Одиниці виміру</th>
                                <th scope="col">Кількість</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($need->elements as $element)
                            <tr>
                                <th>{{$element->name}}</th>
                                <td>{{$element->unit}}</td>
                                <td>{{$element->count}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
