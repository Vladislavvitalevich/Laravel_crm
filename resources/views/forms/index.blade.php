@extends('layouts.app')

@section('content')
    <div class="container-justify">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{route('form.search')}}" method="Post">
                    @csrf
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">По полю</label>
                                </div>
                                <select class="custom-select" id="for_what" name="for_what">
                                    <option value="formation" selected>В/ч (формування)</option>
                                    <option value="responsible">Відповідальна особа</option>
                                    <option value="community">Громада</option>
                                    <option value="number">№</option>
                                </select>
                            </div>
                        </div>
                        <input type="text" name="search" class="form-control" aria-label="">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary">Пошук</button>
                        </div>
                    </div>
                </form>


                <div class="card">
                    @if(count($needs) == 0)
                        <div class="alert alert-danger" role="alert">
                            <h5>Нічого не знайденно</h5>
                        </div>
                    @endif
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
