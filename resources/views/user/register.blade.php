<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Чемпіонат Вінницької області "WorkPlace Champ 2023"</title>
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card-body p-5">
            <h2 class="text-uppercase text-center mb-5">Зарееструватися на сайті</h2>

            <form action="{{ route('user.register') }}" method="post">
                @csrf
                <div class="form-outline mb-4">
                    @error('name')
                    <p class="text-danger">Введіть ім'я</p>
                    @enderror
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control form-control-lg">
                    <label class="form-label" for="form3Example1cg" style="margin-left: 0px;">Ім'я</label>
                    <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 71.2px;"></div><div class="form-notch-trailing"></div></div></div>

                <div class="form-outline mb-4">
                    @error('password')
                    <p class="text-danger">Введіть пароль</p>
                    @enderror
                    <input type="password" name="password" value="{{ old('name') }}" class="form-control form-control-lg">
                    <label class="form-label" for="form3Example4cg" style="margin-left: 0px;">Пароль</label>
                    <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 64px;"></div><div class="form-notch-trailing"></div></div></div>

                <div class="form-outline mb-4">
                    @error('password_confirm')
                    <p class="text-danger">Підтвердіть пароль</p>
                    @enderror
                    <input type="password" name="password_confirm" value="{{ old('password_confirm') }}" class="form-control form-control-lg">
                    @if (session('error'))
                        <p class="text-danger">{{ session('error') }}</p>
                    @endif
                    <label class="form-label" for="form3Example4cdg" style="margin-left: 0px;">Повторити пароль</label>
                    <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 136px;"></div><div class="form-notch-trailing"></div></div></div>

                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Зарееструватися</button>
                </div>

            </form>

        </div>
    </div>
</body>
</html>
