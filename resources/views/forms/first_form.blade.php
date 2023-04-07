@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

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
                                <input type="text" class="form-control {{ $errors->has('pip') ? 'is-invalid' : '' }}" name="pip" id="pip" placeholder="">
                                @error('pip')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="age">Ваш вік </label>
                                <select name="age" class="form-control {{ $errors->has('age') ? 'is-invalid' : '' }}" id="age">
                                    <option value="18-24">18-24</option>
                                    <option value="25-34">25-34</option>
                                    <option value="35-44">35-44</option>
                                    <option value="45-54">45-54</option>
                                    <option value="55-64">55-64</option>
                                    <option value="65+">65+</option>
                                </select>
                                @error('age')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="count_family">З скількох осіб складається  Ваша родини? (цифра, включаючи Вас)</label>
                                <input type="number" name="count_family" class="form-control {{ $errors->has('count_family') ? 'is-invalid' : '' }}" id="count_family" placeholder="">
                                @error('count_family')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="age_children">Вкажіть вік дітей, якщо вони є у Вашій сім’ї
                                    (цифра, через кому якщо дітей декілька; 0 - якщо дітей немає)</label>
                                <input type="text" name="age_children" class="form-control {{ $errors->has('age_children') ? 'is-invalid' : '' }}" id="age_children" placeholder="">
                                @error('age_children')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Чи навчаєтесь Ви або Ваша дитина зараз онлайн в закладі освіти, у якому навчались до 24.02.2022?</label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" value="true" id="study_children_y" name="study_children" class="custom-control-input {{ $errors->has('study_children') ? 'is-invalid' : '' }}" required>
                                    <label class="custom-control-label" for="study_children_y">Так</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" value="false" id="study_children_n" name="study_children" class="custom-control-input {{ $errors->has('study_children') ? 'is-invalid' : '' }}" required>
                                    <label class="custom-control-label" for="study_children_n">Ні</label>
                                </div>
                                @error('study_children')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Чи належите Ви або члени Вашої родини до вразливих категорій (можливо декілька варіантів)</label>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="different_categories_1" name="different_categories[]" value="Багатодітна родина">
                                    <label class="custom-control-label" for="different_categories_1">Багатодітна родина</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="different_categories_2" name="different_categories[]" value="Член сім'ї батьків одинаків">
                                    <label class="custom-control-label" for="different_categories_2">Член сім'ї батьків одинаків</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="different_categories_3" name="different_categories[]" value="Особа/дитина з інвалідністю">
                                    <label class="custom-control-label" for="different_categories_3">Особа/дитина з інвалідністю</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="different_categories_4" name="different_categories[]" value="Член сім'ї військовослужбовців/ветеранів АТО/ООС">
                                    <label class="custom-control-label" for="different_categories_4">Член сім'ї військовослужбовців/ветеранів АТО/ООС</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="different_categories_5" name="different_categories[]" value="Член сім'ї загиблих військовослужбовців">
                                    <label class="custom-control-label" for="different_categories_5">Член сім'ї загиблих військовослужбовців</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="different_categories_6" name="different_categories[]" value="Пенсіонер">
                                    <label class="custom-control-label" for="different_categories_6">Пенсіонер</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="different_categories_7" name="different_categories[]" value="Сім'ї з дітьми під опікою">
                                    <label class="custom-control-label" for="different_categories_7">Сім'ї з дітьми під опікою</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="different_categories_8" name="different_categories[]" value="Вагітні жінки">
                                    <label class="custom-control-label" for="different_categories_8">Вагітні жінки</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="different_categories_9" name="different_categories[]" value="Не належу до жодної">
                                    <label class="custom-control-label" for="different_categories_9">Не належу до жодної</label>
                                </div>
                                @error('different_categories')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Чи маєте Ви статус ВПО?</label>
                                <div class="custom-control custom-radio">
                                    <input value="true" type="radio" id="vpo-y" name="vpo" class="custom-control-input" required>
                                    <label class="custom-control-label" for="vpo-y">Так</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input value="false" type="radio" id="vpo-n" name="vpo" class="custom-control-input" required>
                                    <label class="custom-control-label" for="vpo-n">Ні</label>
                                </div>
                                @error('vpo')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="" for="inlineFormCustomSelect">У якій територіальній громаді Мелітопольського району Ви проживали до 24.02.2022? </label>
                                <select class="custom-select" id="inlineFormCustomSelect" name="gromada">
                                    <option selected class="disabled">Оберіть громаду</option>
                                    <option value="Мелітополь">м. Мелітополь</option>
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
                                @error('gromada')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Де Ви проживаєте зараз?</label>
                                <div class="custom-control custom-radio">
                                    <input value="Київ" type="radio" id="kiev-city" name="w_y_live_now" class="custom-control-input" required>
                                    <label class="custom-control-label" for="kiev-city">м. Київ</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input value="Київська область" type="radio" id="kiev-region" name="w_y_live_now" class="custom-control-input" required>
                                    <label class="custom-control-label" for="kiev-region">Київська область</label>
                                </div>
                                @error('w_y_live_now')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Чи маєте Ви роботу зараз?</label>
                                <div class="custom-control custom-radio">
                                    <input value="true" name="have_work" type="radio" id="have_work_y" class="custom-control-input" required>
                                    <label class="custom-control-label" for="have_work_y">Так</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input value="false" type="radio" id="have_work_n" name="have_work" class="custom-control-input" required>
                                    <label class="custom-control-label" for="have_work_n">Ні</label>
                                </div>
                                @error('have_work')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="phone">Вкажіть контактний номер телефону для інформування щодо подальшої співпраці</label>
                                <input type="tel" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" id="phone" name="phone" placeholder="">
                                @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
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
                                <label for="">Які вказані нижче послуги актуальні для Вас та Вашої родини (можна вибрати декілька варіантів відповіді)</label>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="services_1" name="services[]" value="Отримання медичної допомоги, консультацій лікаря">
                                    <label class="custom-control-label" for="services_1">Отримання медичної допомоги, консультацій лікаря</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="services_2" name="services[]" value="Допомога з влаштуванням дитини у дитячий садок/школу">
                                    <label class="custom-control-label" for="services_2">Допомога з влаштуванням дитини у дитячий садок/школу</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="services_3" name="services[]" value="Заходи для дітей і підлітків">
                                    <label class="custom-control-label" for="services_3">Заходи для дітей і підлітків</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="services_4" name="services[]" value="Послуги з тимчасового догляду за дітьми">
                                    <label class="custom-control-label" for="services_4">Послуги з тимчасового догляду за дітьми</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="services_5" name="services[]" value="Допомога в отриманні адміністративних послуг (видача паспорту, довідок, документів, тощо)">
                                    <label class="custom-control-label" for="services_5">Допомога в отриманні адміністративних послуг (видача паспорту, довідок, документів, тощо)</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="services_6" name="services[]" value="Допомога в оформленні/отриманні пенсії, соціальних виплат">
                                    <label class="custom-control-label" for="services_6">Допомога в оформленні/отриманні пенсії, соціальних виплат</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="services_7" name="services[]" value="Отримання гуманітарної допомоги (продукти харчування, засоби гігієни, побутові речі, тощо)">
                                    <label class="custom-control-label" for="services_7">Отримання гуманітарної допомоги (продукти харчування, засоби гігієни, побутові речі, тощо)</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="services_8" name="services[]" value="Потреба в отриманні соціальних послуг з догляду вдома">
                                    <label class="custom-control-label" for="services_8">Потреба в отриманні соціальних послуг з догляду вдома</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="services_9" name="services[]" value="Отримання правової допомогиа">
                                    <label class="custom-control-label" for="services_9">Отримання правової допомогиа</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="services_10" name="services[]" value="Отримання освітніх послуг для дорослих (курси, майстер-класи, тощо)">
                                    <label class="custom-control-label" for="services_10">Отримання освітніх послуг для дорослих (курси, майстер-класи, тощо)</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="services_11" name="services[]" value="Інформування про діяльність центрів і організацій, що допомагають ВПО">
                                    <label class="custom-control-label" for="services_11">Інформування про діяльність центрів і організацій, що допомагають ВПО</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="services_12" name="services[]" value="Спілкування за інтересами">
                                    <label class="custom-control-label" for="services_12">Спілкування за інтересами</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="services_13" name="services[]" value="Інше">
                                    <label class="custom-control-label" for="services_13">Інше</label>
                                </div>
                                @error('services')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <p class="text-center h2">БЛОК ІІІ. Волонтерство</p>
                            <p>
                                <em>
                                    “Мелітополь саме тут. Київ” - це осередок для людей і про людей. Він має бути
                                    наповнений життям, бути затишним і корисним. Для його функціонування потрібен
                                    людський ресурс, адже охопити всі побажання мелітопольців одночасно працівникам
                                    осередку може бути важко. А можливо саме у Вас є цікаві пропозиції чи ексклюзивні
                                    уміння і знання, якими Ви хотіли би поділитися з іншими. Чи просто бути корисним у
                                    вільний час.
                                </em>
                            </p>

                            <div class="form-group">
                                <label for="">Чи готові Ви або члени Вашої родини стати волонтером мелітопольського осередку?</label>
                                <div class="custom-control custom-radio">
                                    <input value="true" type="radio" id="volonter-y" name="volonter" class="custom-control-input" required>
                                    <label class="custom-control-label" for="volonter-y">Так</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input value="false" type="radio" id="volonter-n" name="volonter" class="custom-control-input" required>
                                    <label class="custom-control-label" for="volonter-n">Ні</label>
                                </div>
                                @error('volonter')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="w_y_g_do">Якщо ваша попередня відповідь була «Так» то,
                                    вкажіть чим саме Ви могли б допомогти?</label>
                                <textarea class="form-control {{ $errors->has('w_y_g_do') ? 'is-invalid' : '' }}" id="w_y_g_do" rows="4" name="w_y_g_do"></textarea>
                                @error('w_y_g_do')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="h_m_time">Скільки годин на тиждень Ви готові цьому приділяти? (вказати цифру)</label>
                                <input type="number" class="form-control {{ $errors->has('h_m_time') ? 'is-invalid' : '' }}" id="h_m_time" name="h_m_time" placeholder="">
                                @error('h_m_time')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
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
