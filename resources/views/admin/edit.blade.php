@extends('admin.layouts.app')

@section('title')
    Панель адміністратора
@endsection

@section('content')
    <form action="{{ route('admin.update', $customer->id) }}" method="post">
        @csrf
        @method('patch')
        <h2 class="text-uppercase text-center mb-5">Виправити дані учасника</h2>
        <div class="form-outline mb-4">
            <input type="text" name="parent_name" value="{{ $customer->parent_name }}" class="form-control form-control-lg">
            <label class="form-label" for="form3Example1cg" style="margin-left: 0px;">Прізвище та ім'я батька</label>
            <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 71.2px;"></div><div class="form-notch-trailing"></div></div></div>

        <div class="form-outline mb-4">
            <input type="text" name="user_name" value="{{ $customer->user_name }}" class="form-control form-control-lg">
            <label class="form-label" for="form3Example1cg" style="margin-left: 0px;">Прізвище та ім'я учасника</label>
            <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 71.2px;"></div><div class="form-notch-trailing"></div></div></div>

        <div class="form-outline mb-4">
            <input type="date" name="birth_date" value="{{ $customer->birth_date }}" class="form-control form-control-lg">
            <label class="form-label" for="form3Example1cg" style="margin-left: 0px;">Дата народження учасника</label>
            <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 71.2px;"></div><div class="form-notch-trailing"></div></div></div>

        <div class="form-outline mb-4">
            <input type="tel" name="phone_number" value="{{ $customer->phone_number }}" class="form-control form-control-lg">
            <label class="form-label" for="form3Example1cg" style="margin-left: 0px;">Номер телефона</label>
            <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 71.2px;"></div><div class="form-notch-trailing"></div></div></div>

        <div class="form-outline mb-4">
            <input type="text" name="owner_name" value="{{ $customer->owner_name }}" class="form-control form-control-lg">
            <label class="form-label" for="form3Example1cg" style="margin-left: 0px;">Власник номера телефона</label>
            <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 71.2px;"></div><div class="form-notch-trailing"></div></div></div>

        <div class="form-outline mb-4">

            <select class="form-select" name="battle" aria-label="Default select example">
                <option
                    {{ $customer->battle == '-' ? 'selected' : '' }}
                    value="-">-</option>
                <option
                    {{ $customer->battle == 'Батли 13-15 років' ? 'selected' : '' }}
                    value="Батли 13-15 років">Батли 13-15 років</option>
                <option
                    {{ $customer->battle == 'Батли 16+ років' ? 'selected' : '' }}
                    value="Батли 16+ років">Батли 16+ років</option>
            </select>
            <label class="form-label" for="form3Example1cg" style="margin-left: 0px;">Номінація "Батли"</label>
        </div>

        <div class="form-outline mb-4">

            <select class="form-select" name="freestyle" aria-label="Default select example">
                <option
                    {{ $customer->freestyle == '-' ? 'selected' : '' }}
                    value="-">-</option>
                <option
                    {{ $customer->freestyle == 'Фрістайл 9-12 років' ? 'selected' : '' }}
                    value="Фрістайл 9-12 років">Фрістайл 9-12 років</option>
            </select>
            <label class="form-label" for="form3Example1cg" style="margin-left: 0px;">Номінація "Фрістайл"</label>
        </div>

        <div class="form-outline mb-4">

            <select class="form-select" name="base" aria-label="Default select example">
                <option
                    {{ $customer->base == '-' ? 'selected' : '' }}
                    value="-">-</option>
                <option
                    {{ $customer->base == 'База 5-8 років' ? 'selected' : '' }}
                    value="База 5-8 років">База 5-8 років</option>
                <option
                    {{ $customer->base == 'База 9-12 років' ? 'selected' : '' }}
                    value="База 9-12 років">База 9-12 років</option>
                <option
                    {{ $customer->base == 'База 13-15 років' ? 'selected' : '' }}
                    value="База 13-15 років">База 13-15 років</option>
                <option
                    {{ $customer->base == 'База 16-21 років' ? 'selected' : '' }}
                    value="База 16-21 років">База 16-21 років</option>
            </select>
            <label class="form-label" for="form3Example1cg" style="margin-left: 0px;">Номінація "Базові вправи"</label>
        </div>

        <div class="form-outline mb-4">

            <select class="form-select" name="weight" aria-label="Default select example">
                <option
                    {{ $customer->weight == '-' ? 'selected' : '' }}
                    value="-">-</option>
                <option
                    {{ $customer->weight == 'Підтягування +24кг, Віджимання на брусах +32 кг' ? 'selected' : '' }}
                    value="Підтягування +24кг, Віджимання на брусах +32 кг">Підтягування +24кг, Віджимання на брусах +32 кг</option>
            </select>
            <label class="form-label" for="form3Example1cg" style="margin-left: 0px;">Номінація "Базові вправи з вагою 18+ років"</label>
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Сохранити</button>
        </div>

    </form>
@endsection
