@extends('layouts.app')

@section('content')
    <div class="container-justify">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <form method="POST" action="{{route('form.store')}}" >
                        @csrf
                        <div class="card-header">
                            <div class="form-group row">
                                <label for="shaping" class="col-sm-auto col-form-label">В/ч (формування) </label>
                                <div class="col-sm-auto">
                                    <input type="text" class="form-control" name="formation" id="shaping" placeholder="">
                                </div>

                                <label for="responsible" class="col-sm-auto col-form-label">Відповідальна особа</label>
                                <div class="col-sm">
                                    <input type="text" class="form-control" name="responsible" id="responsible" placeholder="">
                                </div>

                                <div class="w-100 my-2"></div>

                                <label class="col-sm-auto" for="community">Громада</label>
                                <select class="custom-select col-sm-4" name="community" id="community">
                                    <option selected>м. Мелітополь</option>
                                    <option disabled>Виберыть громаду</option>
                                    <option >Мирненська</option>
                                    <option >Новоуспенівська</option>
                                    <option >Семенівська</option>
                                    <option >Кирилівська</option>
                                    <option >Новобогданівська</option>
                                    <option >Приазовська</option>
                                    <option >Новенська</option>
                                    <option >Якимівська</option>
                                    <option >Терпіннівська</option>
                                    <option >Костянтинівська</option>
                                    <option >Веселівська</option>
                                    <option >Чкаловська</option>
                                    <option >Нововасилівська</option>
                                    <option >Олександрівська</option>
                                    <option >Плодородненська</option>
                                    <option >Інше</option>
                                </select>

                                <label for="number" class="col-sm-auto col-form-label">№</label>
                                <div class="col-sm">
                                    <input type="text" name="number" id="number" class="form-control" placeholder="">
                                </div>
                            </div>

                        </div>

                        <div class="card-body">

                            <table class="table" id="form">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">Наіменування</th>
                                    <th scope="col">Одиниці виміру</th>
                                    <th scope="col">Кількість</th>
                                </tr>
                                </thead>
                                <tbody id="form_table_body">
                                <tr>
                                    <td class="pt-1 border-top-0">
                                        <input type="text" class="form-control m-0" name="name[]" placeholder="">
                                    </td>
                                    <td class="pt-1 border-top-0">
                                        <select class="custom-select" name="units_measurement[]" id="">
                                            <option >Шт.</option>
                                            <option >м.</option>
                                            <option >см.</option>
                                            <option >км.</option>
                                            <option >гр.</option>
                                            <option >кг.</option>
                                            <option >т.</option>
                                            <option >мл.</option>
                                            <option >л.</option>
                                        </select>
                                    </td>
                                    <td class="pt-1 border-top-0">
                                        <input type="number" class="form-control" name="count[]" placeholder="">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="w-100">
                                <button type="button" class="btn btn-outline-dark" id="add" onclick="addTd();">Додати строку</button>
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Обгрунтування</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                            </div>
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-outline-secondary ">Відправити</button>
                                {{--                                <button type="submit" class="btn btn-outline-secondary">Друкувати</button>--}}
                                {{--                                <button type="submit" class="btn btn-outline-dark">Відмінити</button>--}}
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function addTd(){

            let form = document.getElementById('form_table_body');
            form.insertAdjacentHTML('beforeend', ' <tr>' +
                '<td class="pt-1 border-top-0">' +
                '<input type="text" class="form-control m-0" name="name[]" placeholder="">' +
                '</td>' +
                '<td class="pt-1 border-top-0">' +
                '<select class="custom-select" id="inlineFormCustomSelect" name="units_measurement[]">'+
                '<option >Шт.</option>'+
                '<option >м.</option>' +
                '<option >см.</option>' +
                '<option >км.</option>' +
                '<option >гр.</option>' +
                '<option >кг.</option>' +
                '<option >т.</option>' +
                '<option >мл.</option>' +
                '<option >л.</option>' +
                '</select>' +
                '</td>' +
                '<td class="pt-1 border-top-0">'+
                '<input type="number" class="form-control" placeholder="" name="count[]">' +
                '</td>'+
                '</tr>');
        };
    </script>
@endsection
