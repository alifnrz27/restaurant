@extends('layouts.app')

@section('content')
<div class="w-screen h-screen bg-[#219ebc] flex items-center justify-center">
    <div class="rounded-lg flex w-full lg:max-w-[800px]">
        <div class="hidden md:block md:w-6/12">
            <img src="{{ asset('asset/img/login.jpg') }}" alt="Login Image" class="w-full h-full object-cover rounded-l-lg">
        </div>
        <div class="w-full md:w-6/12 p-10 bg-white rounded-r-lg">
            <form action="">
                @csrf
                <div class="mb-4">
                    <h1 class="font-bold text-[30px]">Welcome back !</h1>
                    <h3 class="text-gray-400 text-[16px]">Masukkan email dan password anda.</h3>
                </div>
                @include('components.input', [
                    'id' => 'email',
                    'label' => 'Email',
                    'type' => 'email',
                    'name' => 'email',
                    'placeholder' => 'Masukkan email',
                ])
                @include('components.input', [
                    'id' => 'password',
                    'label' => 'Password',
                    'type' => 'password',
                    'name' => 'password',
                    'placeholder' => 'Masukkan password',
                ])
                <div class="mb-4 text-[12px]">
                    Belum punya akun? <a href="{{ route('auth.register') }}" class="underline text-blue-500">Daftar di sini</a>
                </div>
                <div>
                    <button type="submit" class="w-full px-4 py-2 bg-blue-500 rounded-lg text-white">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
