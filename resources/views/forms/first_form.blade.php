@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <form method="post" action="{{ route('form-1.create') }}">
                    @csrf
                    <div class="card">
                        <div class="card-header text-center">
                            <h1>
                                Опитування мешканців м. Мелітополя та Мелітопольського району,
                                які перебувають у м. Київ та Київської області
                            </h1>
                            <p class="text-center">
                                <em>
                                    Вітаємо вас, любі мелітопольці!
                                </em>
                            </p>
                            <p class="text-justify">
                                <em>
                                    За ініціативи ком’юніті мелітопольців, які тимчасово проживають у Києві та області, плануємо
                                    відкриття на території м. Київ координаційного осередку допомоги “Мелітополь саме тут.
                                    Київ”. Для знайомства та аналізу пріоритетів у потребах саме Вашої родини просимо приділити
                                    п’ять хвилин часу і відповісти на питання, які стануть основою нашої подальшої взаємодії.
                                    Всі результати опитування використовуватимуться виключно у загальному вигляді.
                                </em>
                            </p>
                            <p class="text-right">
                                <i class="text-danger h4">*</i> &nbsp;УВАГА! Анкету заповнює 1 повнолітній член родини за всю сім’ю <br>
                                (1 анкета на 1 домогосподарство)
                            </p>
                        </div>

                        <div class="card-body">
                            <p class="text-center h2">БЛОК І. Інформація про родину</p>
                            <div class="form-group">
                                <label for="pip">ПІП</label>
                                <input type="text" class="form-control" name="pip" placeholder=""id="pip" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="age">Ваш вік </label>
                                <select name="age" class="form-control" id="age">
                                    <option>18-24</option>
                                    <option>25-34</option>
                                    <option>35-44</option>
                                    <option>45-54</option>
                                    <option>55-64</option>
                                    <option>65+</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="count_family">З скількох осіб складається  Ваша родини? (цифра, включаючи Вас)</label>
                                <input type="number" name="count_family" class="form-control" id="count_family" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="age_children">Вкажіть вік дітей, якщо вони є у Вашій сім’ї
                                    (цифра, через кому якщо дітей декілька; 0 - якщо дітей немає)</label>
                                <input type="text" name="age_children" class="form-control" id="age_children" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="">Чи навчаєтесь Ви або Ваша дитина зараз онлайн в закладі освіти, у якому навчались до 24.02.2022?</label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="study_children_y" name="study_children" class="custom-control-input">
                                    <label class="custom-control-label" for="study_children_y">Так</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="study_children_n" name="study_children" class="custom-control-input">
                                    <label class="custom-control-label" for="study_children_n">Ні</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Чи належите Ви або члени Вашої родини до вразливих категорій (можливо декілька варіантів)</label>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="different_categories_1" name="different_categories">
                                    <label class="custom-control-label" for="different_categories_1">Багатодітна родина</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="different_categories_2" name="different_categories">
                                    <label class="custom-control-label" for="different_categories_2">Член сім'ї батьків одинаків</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="different_categories_3" name="different_categories">
                                    <label class="custom-control-label" for="different_categories_3">Особа/дитина з інвалідністю</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="different_categories_4" name="different_categories">
                                    <label class="custom-control-label" for="different_categories_4">Член сім'ї військовослужбовців/ветеранів АТО/ООС</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="different_categories_5" name="different_categories">
                                    <label class="custom-control-label" for="different_categories_5">Член сім'ї загиблих військовослужбовців</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="different_categories_6" name="different_categories">
                                    <label class="custom-control-label" for="different_categories_6">Пенсіонер</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="different_categories_7" name="different_categories">
                                    <label class="custom-control-label" for="different_categories_7">Сім'ї з дітьми під опікою</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="different_categories_8" name="different_categories">
                                    <label class="custom-control-label" for="different_categories_8">Вагітні жінки</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="different_categories_9" name="different_categories">
                                    <label class="custom-control-label" for="different_categories_9">Не належу до жодної</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Чи маєте Ви статус ВПО?</label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="vpo-y" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="vpo-y">Так</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="vpo-n" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="vpo-n">Ні</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="" for="inlineFormCustomSelect">У якій територіальній громаді Мелітопольського району Ви проживали до 24.02.2022? </label>
                                <select class="custom-select" id="inlineFormCustomSelect" name="gromada">
                                    <option disabled>Виберіть громаду</option>
                                    <option value="Мелітополь" selected>м. Мелітополь</option>
                                    <option value="Мирненська">Мирненська</option>
                                    <option value="Новоуспенівська">Новоуспенівська</option>
                                    <option value="Семенівська">Семенівська</option>
                                    <option value="Кирилівська">Кирилівська</option>
                                    <option value="Новобогданівська">Новобогданівська</option>
                                    <option value="Приазовська">Приазовська</option>
                                    <option value="Новенська">Новенська</option>
                                    <option value="Якимівська">Якимівська</option>
                                    <option value="Терпіннівська">Терпіннівська</option>
                                    <option value="Костянтинівська">Костянтинівська</option>
                                    <option value="Веселівська">Веселівська</option>
                                    <option value="Чкаловська">Чкаловська</option>
                                    <option value="Нововасилівська">Нововасилівська</option>
                                    <option value="Олександрівська">Олександрівська</option>
                                    <option value="Плодородненська">Плодородненська</option>
                                    <option value="Інше">Інше</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Де Ви проживаєте зараз?</label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="kiev-city" name="w_y_live_now" class="custom-control-input">
                                    <label class="custom-control-label" for="kiev-city">м. Київ</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="kiev-region" name="w_y_live_now" class="custom-control-input">
                                    <label class="custom-control-label" for="kiev-region">Київська область</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Чи маєте Ви роботу зараз?</label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="have_work_y" name="have_work" class="custom-control-input">
                                    <label class="custom-control-label" for="have_work_y">Так</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="have_work_n" name="have_work" class="custom-control-input">
                                    <label class="custom-control-label" for="have_work_n">Ні</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="phone">Вкажіть контактний номер телефону для інформування щодо подальшої співпраці</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="">
                            </div>

                            <p class="text-center h2">БЛОК ІІ. Виявлення потреб</p>
                            <p>
                                <em>
                                    Далі давайте поговоримо про сам осередок. Яким він має бути, для кого і з яким
                                    наповненням, щоб стати реальним помічником мелітопольцям, які вимушені перебувати
                                    далеко від дому?
                                </em>
                            </p>

                            <div class="form-group">
                                <label for="">Чи готові Ви або члени Вашої родини стати волонтером мелітопольського осередку?</label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="-volonter-y" name="y-volonter-y" class="custom-control-input">
                                    <label class="custom-control-label" for="-volonter-y-y">Так</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="-volonter-n" name="-volonter-n" class="custom-control-input">
                                    <label class="custom-control-label" for="-volonter-n">Ні</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="w_y_g_do">Якщо ваша попередня відповідь була «Так» то,
                                    вкажіть чим саме Ви могли б допомогти?</label>
                                <textarea class="form-control" id="w_y_g_do" rows="4" name="w_y_g_do"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="h_m_time">Скільки годин на тиждень Ви готові цьому приділяти? (вказати цифру)</label>
                                <input type="number" class="form-control" id="h_m_time" name="h_m_time" placeholder="">
                            </div>



                        </div>

                        <div class="card-footer">
                            <p>
                                Відповідно до Закону України «Про захист персональних даних» даю згоду на обробку моїх
                                персональних даних
                            </p>

                            <p class="text-justify">
                                <em>
                                    Щиро вдячні за приділений час. Ваша думка є надважливою для відкриття  мелітопольського
                                    осередку “Мелітополь саме тут. Київ”. Результати опитування будуть детально опрацьовані
                                    та використані в узагальненому вигляді під час роботи спеціалістів осередку. Про
                                    відкриття та режим роботи буде повідомлено додатково. Перемоги! Лише разом ми сила!
                                </em>
                            </p>

                            <button type="submit" class="btn btn-primary">Зберегти</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
