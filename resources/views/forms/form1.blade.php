@extends('layouts.app')

@section('content')
    <div class="container-justify">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <form>
                        <div class="card-header">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-auto col-form-label">В/ч (формування) </label>
                                <div class="col-sm-auto">
                                    <input type="text" class="form-control" placeholder="">
                                </div>

                                <label for="inputEmail3" class="col-sm-auto col-form-label">Відповідальна особа</label>
                                <div class="col-sm-auto">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                                <div class="w-100 my-2"></div>
                                <label class="col-sm-auto" for="inlineFormCustomSelect">Громада</label>
                                <select class="custom-select col-2" id="inlineFormCustomSelect">
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

                                <label for="inputEmail3" class="col-sm-auto col-form-label " >Дата заповнення</label>
                                <div class="col-sm-auto">
                                    <input type="text" class="form-control" placeholder="">
                                </div>

                                <label for="inputEmail3" class="col-sm-auto col-form-label">№</label>
                                <div class="col-sm-auto">
                                    <input type="text" class="form-control" placeholder="First name">
                                </div>
                            </div>

                        </div>

                        <div class="card-body">

                            <table class="table">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Наіменування</th>
                                    <th scope="col">Одиниці виміру</th>
                                    <th scope="col">Кількість</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td class="pt-1">
                                        <input type="text" class="form-control m-0" placeholder="">
                                    </td>
                                    <td class="pt-1">
                                        <select class="custom-select" id="inlineFormCustomSelect">
                                            <option >Інше</option>
                                            <option >Інше</option>
                                            <option >Інше</option>
                                            <option >Інше</option>
                                            <option >Інше</option>
                                        </select>
                                    </td>
                                    <td class="pt-1">
                                        <input type="number" class="form-control" placeholder="">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="w-100">
                                <button type="button" class="btn btn-outline-dark">Додати строку</button>
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Обгрунтування</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                            </div>
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-outline-secondary ">Відправити</button>
                                <button type="submit" class="btn btn-outline-secondary">Друкувати</button>
                                <button type="submit" class="btn btn-outline-dark">Відмінити</button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
