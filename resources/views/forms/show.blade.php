@extends('layouts.app')

@section('content')
    <div class="container-justify">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">


                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
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
                            <div class="col-8">
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
                    <div class="card-footer">

                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection
