<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Чемпіонат Вінницької області "WorkPlace Champ 2023"</title>
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="wrapper">
    <form action="{{ route('site.store') }}" method="post">
        @csrf
        <div class="block">
            <img class="header__image" src="{{ asset('img/danil1.jpg') }}" alt="danil-1">
            <article class="header">
                @if(session('success'))
                    <div class="alert alert-success text-center">{{ session('success') }}</div>
                @endif
                @error('checkout')
                <p class="error-head">Надайте згоду з сайтом!</p>
                @enderror
                @error('parent_name')
                <p class="error-head">Вкажіть ім'я батьків, або поставте "-"</p>
                @enderror
                @error('user_name')
                <p class="error-head">Ви не вказали своє ім'я</p>
                @enderror
                @error('birth_date')
                <p class="error-head">Ви не вказали дату свого народження</p>
                @enderror
                @error('phone_number')
                <p class="error-head">Ви не вказали номер телефону</p>
                @enderror
                @error('owner_name')
                <p class="error-head">Ви не вказали власника номер телефону</p>
                @enderror
                <p class="header__title">Чемпіонат Вінницької області "WorkPlace Champ 2023"</p>
                <div class="header__title">Street Workout Вінниця 2023</div>
                <p>Місто Вінниця. Зал "WORKOUTPLACE.VN" на базі клубу "Planet Fitness" за адресою 600-річчя, 19, 2 поверх (силка в гугл картах)</p>
                <div><span class="header__span">Організатори:</span> спортивний клуб "WORKOUTPLACE.VN"</div>
                <div><span class="header__span">Призовий фонд</span> - 10 000 гривень</div>

                <p><span class="header__info">РЕЄСТРАЦІЯ ЗАКРИВАЄТЬСЯ в НД 22.01.22 в 23.59.</span><br>
                    <span class="header__info-2">Внесок за участь в змаганнях 100 грн. Посилання на офіційний телеграм канал змагань</span> (реквізити для оплати, правила, таймінг змагань, посилання на фото-відео звіти) (силка на телеграм канал)</p>

                <p class="header__info-2">28 січня. Чемпіонат Вінницькоі області з воркаут батлів та базових вправах (вік 13-15, 16+ років).</p>
                <p class="header__info-2">Категорії:</p>

                Батли - 2 виступи 1х1 тривалістю по 30 секунд. Оцінюється загальне враження від виступу, складність елементів, використання зв'язок елементів, артистизм, помилки та невдалі спроби.
                <ol class="header__list">
                    <li>Батли 13-15 років</li>
                    <li>Батли 16+ років</li>
                </ol>
                Жеребкування проходить після підтвердження реестрації всіх учасників і розподіл їх по категоріях.
            </article>
            <img class="header__image" src="{{ asset('img/danil2.jpg') }}" alt="danil-2">
        </div>
        <div class="block">
            <img class="header__image" src="{{ asset('img/danil-3.jpg') }}" alt="danil-1">
            <article class="header">
                <p>Базові вправи - підтягування на перекладині, віджимання на брусах, віджимання від підлоги.</p>
                <ol class="header__list">
                    <li>13-15 років - Підтягування та віджимання від підлоги.</li>
                    <li>16-21 років - Підтягування та віджимання на брусах.</li>
                </ol>
                <p>Учасники змагань остримують дипломи про участь та фірмовий браслет.
                    Призери змагань отримують дипломи, медалі, кубки та призи від спонсорів заходу.</p>

                <p><span class="header__info-2">29 січня. Чемпіонат Вінницької області з фрістайлу, базових вправ та вправ з вагою (5-12, 16+ років)</span>
                <p class="header__info-2">Категорії:</p>
					<span class="header__info-2">Фрістайл</span> - вільний виступ під музику. Тривалість виступу - 90 сек. Оцінюються загальне враження від виступу, складність елементів, використання зв'язок елементів, помилки та невдалі спроби.
                    Максимальний бал за виступ -  балів (по 15 від кожного з трьох суддів).
                    Перемагає учасник, який отримав найвищий загальний бал.</p>
                <p>Фрістайл 9-12 років</p>

                <p class="header__alert">Базові вправи - Підтягування та відтискання від підлоги</p>

                <ol class="header__list">
                    <li>База - 5-8 років</li>
                    <li>База - 9-12 років</li>
                </ol>

                <p>Учасники змагань остримують дипломи про участь та фірмовий браслет.
                    Призери змагань отримують дипломи, медалі, кубки та призи від спонсорів заходу.</p>

                <p class="header__alert">Класичні базові вправи з вагою (16+ років)</p>

                <ol class="header__list">
                    <li>Підтягування +24 кг</li>
                    <li>Віджимання на брусах +32 кг</li>
                </ol>

            </article>
            <img class="header__image" src="{{ asset('img/danil-4.jpg') }}" alt="danil-2">
        </div>
        <div class="block">
            <img class="header__image" src="{{ asset('img/dima1.jpg') }}" alt="danil-1">
            <article class="header">
                <p class="header__info-2">Ознайомився (лась)
                    ОБОВ'ЯЗКОВО ДЛЯ ОЗНАЙОМЛЕННЯ батькам (законним опікунам) учасників віком до 18 років. Повнолітні учасники можуть підтверджувати цей пункт самостійно.</p>


                <p><span class="header__info-2">Я ВИСЛОВЛЮЮ БАЖАННЯ прийняти участь \ щоб учасник, якого я представляю прийняв участь</span> у змаганнях Чемпіонат Вінницької області з воркауту (далі «Змагання»), які будуть проходити 28-29.01.23 на базі приміщення спортивного клубу “WORKOUTPLACE.VN” за адресою: м. Вінниця, вул. 600-річчя, 19.</p>
                <span class="header__info-2">ПІДТВЕРДЖУЮ</span>, що у мене / у учасника якого я представляю не має фізичних вад та медичних протипоказань щодо участі у Змаганнях. Я приймаю на себе всю відповідальність за можливі травми та інші наслідки нещасних випадків, які можуть відбутися зі мною / Учасником якого я представляю під час Змагань, в тому числі тяжкі наслідки. Я / Учасник якого я представляю фізично та морально підготовлений до участі в Змаганнях та до можливого розумового і фізичного напруження. Я / Учасник якого я представляю під час Змагань, ніколи та за ні яких обставин не буде навмисно створювати ситуації, які можуть спричинити шкоду іншим учасникам, організаторам, волонтерам, стороннім особам, а також майну. Я / Учасник якого я представляю / буде невпинно дотримуватися всіх правил Змагань.

                <p><span class="header__info-2">ВИСЛОВЛЮЮ ЗГОДУ</span> з тим, що у разі спричинення шкоди майну громадян чи організацій, життю чи здоров’ю власного або учасникам Змагань та / або інших осіб усю відповідальність за можливі наслідки спричинення шкоди несе безпосередньо особа, яка завдала шкоду чи особа яка його представляє.</p>
                <p><input class="header__radio" type="radio" name="checkout" value="done">Так</p>
                @error('checkout')
                <p class="error">Необхідно надати згоду із сайтом</p>
                @enderror
            </article>
            <img class="header__image" src="{{ asset('img/dima2.jpg') }}" alt="danil-2">
        </div>
        <div class="block">
            <img class="header__image" src="{{ asset('img/nazenko1.jpg') }}" alt="danil-1">
            <article class="header">
                <div class="form">
                    <p>Прізвище та ім'я особи яка дала згоду в попередньому пункті, з вказанням ступеню спорідненості: батько, мати, законний опікун. Для повнолітніх учасників - в цьому пункті ставимо "-"</p>
                    <p><input class="input" type="text" name="parent_name" value="{{ old('parent_name') }}" placeholder="Моя відповідь"></p>
                    @error('parent_name')
                    <p class="error">Вкажіть ім'я батьків, якщо Вам немає 18 років, або поставте "-"</p>
                    @enderror
                </div>

                <div class="form">
                    <p>Прізвище та ім'я учасника українською. Саме в такому порядку</p>
                    <p><input class="input" type="text" name="user_name" value="{{ old('user_name') }}" placeholder="Моя відповідь"></p>
                    @error('user_name')
                    <p class="error">Вкажіть своє ім'я</p>
                    @enderror
                </div>

                <div class="form">
                    <p>Дата народження учасника</p>
                    <p><input class="input-date" name="birth_date" value="{{ old('birth_date') }}" type="date"></p>
                    @error('birth_date')
                    <p class="error">Вкажіть дату свого народження</p>
                    @enderror
                </div>

                <div class="form">
                    <p>Номер телефону для контакту</p>
                    <p><input class="input" type="tel" name="phone_number" value="{{ old('phone_number') }}" placeholder="Моя відповідь"></p>
                    @error('phone_number')
                    <p class="error">Вкажіть номер телефона</p>
                    @enderror
                </div>

                <div class="form">
                    <p>Чий номер телефону Ви вказали? (учасника / тренера / мами учасника / тата учасника і т.д.)</p>
                    <p><input class="input" type="text" name="owner_name" value="{{ old('owner_name') }}" placeholder="Моя відповідь"></p>
                    @error('owner_name')
                    <p class="error">Вкажіть власника номера телефону</p>
                    @enderror
                </div>
            </article>
            <img class="header__image" src="{{ asset('img/nazenko2.jpg') }}" alt="danil-2">
        </div>
        <div class="block">
            <img class="header__image" src="{{ asset('img/element.jpg') }}" alt="danil-1">
            <article class="header">
                <div class="form">
                    <p class="header__text">Номінація "Воркаут Батли". Обирайте варіант на основі передбачуваного віку на день змагань.</p>
                    <ul class="header__menu">
                        <li><input name="battle" type="radio" value="Батли 13-15 років">Батли 13-15 років</li>
                        <li><input name="battle" type="radio" value="Батли 16+ років">Батли 16+ років</li>
                    </ul>
                </div>

                <div class="form">
                    <p class="header__text">Номінація "Воркаут Фрістайл"</p>
                    <ul class="header__menu">
                        <li><input name="freestyle" type="radio" value="Фрістайл 9-12 років">Фрістайл 9-12 років</li>
                    </ul>
                </div>

                <div class="form">
                    <p class="header__text">Номінація "Базові вправи"</p>
                    <ul class="header__menu">
                        <li><input name="base" type="radio" value="База 5-8 років">База 5-8 років</li>
                        <li><input name="base" type="radio" value="База 9-12 років">База 9-12 років</li>
                        <li><input name="base" type="radio" value="База 13-15 років">База 13-15 років</li>
                        <li><input name="base" type="radio" value="База 16-21 років">База 16-21 років</li>
                    </ul>
                </div>

                <div class="form">
                    <p class="header__text">Номінація "Базові вправи з вагою 18+ років"</p>
                    <ul class="header__menu">
                        <li><input name="weight" type="radio" value="Підтягування +24кг, Віджимання на брусах +32 кг">Підтягування +24кг, Віджимання на брусах +32 кг</li>
                    </ul>
                </div>

                <div class="buttons">
                    <button class="button__submit" type="submit">Відправити</button>
                    <button class="button__reset" type="reset">Очистити форму</button>
                </div>
            </article>
            <img class="header__image" src="{{ asset('img/element1.jpg') }}" alt="danil-2">
        </div>
        <div class="block">
            <img class="header__no-image" src="{{ asset('img/no-image.jpg') }}" alt="danil-1">
            <article class="header">
                <p class="judge__title">Судді:</з>
                <div class="judge">
                    <a href="https://www.instagram.com/_danil_workout_/"><img class="header__round-image" src="{{ asset('img/danil1-ava.jpg') }}">
                        <p>Данило Кирилішен</p>
                        <p>@_danil_workout_</p>
                    </a>
                    <a href="https://www.instagram.com/sldvnk_d_pl/"><img class="header__round-image" src="{{ asset('img/bro.jpg') }}">
                        <p>Дмитро Солодовник</p>
                        <p>@sldvnk_d_pl</p>
                    </a>
                    <a href="https://instagram.com/shapoval_workout?igshid=YmMyMTA2M2Y="><img class="header__round-image" src="{{ asset('img/shapoval.jpg') }}">
                        <p>Костянтин Шаповал</p>
                        <p>@shapoval_workout</p>
                    </a>
                    <a href="https://www.instagram.com/nazenco/"><img class="header__round-image" src="{{ asset('img/nazenko-ava.jpg') }}">
                        <p>Федорченко Назар</p>
                        <p>@nazenco</p>
                    </a>
                    <a href="https://www.instagram.com/pozhiloy_che/?igshid=YmMyMTA2M2Y%3D"><img class="header__round-image" src="{{ asset('img/max.jpg') }}">
                        <p>Максим Старіков</p>
                        <p>@pozhiloy_che</p>
                    </a>
                </div>
            </article>
            <img class="header__no-image" src="{{ asset('img/no-image.jpg') }}" alt="danil-2">
        </div>
    </form>
</div>

<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
