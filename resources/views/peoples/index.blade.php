@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">ПІП</th>
                            <th scope="col">Вік</th>
                            <th scope="col">Кількість членів сім'ї</th>
                            <th scope="col">Вік дітей</th>
                            <th scope="col">Навчання онлайн</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($peoples as $people)
                        <tr>
                            <th scope="row">{{ $people->pip }}</th>
                            <td>{{ $people->age }}</td>
                            <td class="text-center">{{ $people->count_family }}</td>
                            <td>{{ $people->age_children }}</td>
                            <td>{{ $people->study_children === 1 ? 'Так' : 'НІ'  }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $peoples->links() }}
                </div>
            </div>
        </div>
        {{dd($peoples->first())}}
    </div>
@endsection
