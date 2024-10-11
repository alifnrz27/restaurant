@extends('layouts.app')

@section('content')
<div class="w-screen h-screen bg-[#219ebc] flex items-center justify-center">
    <div class="rounded-lg flex w-full lg:max-w-[800px]">
        <div class="w-full md:w-6/12 p-10 bg-white rounded-l-lg">
            <form action="">
                @csrf
                <div class="mb-4">
                    <h1 class="font-bold text-[30px]">Register</h1>
                    <h3 class="text-gray-400 text-[16px]">Selamat datang di restoran kami.</h3>
                </div>
                @include('components.input', [
                    'id' => 'name',
                    'label' => 'Nama',
                    'type' => 'text',
                    'name' => 'name',
                    'placeholder' => 'Masukkan nama',
                ])
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
                @include('components.input', [
                    'id' => 'password_confirmation',
                    'label' => 'Konfirmasi Password',
                    'type' => 'password',
                    'name' => 'password_confirmation',
                    'placeholder' => 'Masukkan konfirmasi password',
                ])
                <div class="mb-4 text-[12px]">
                    Sudah punya akun? <a href="{{ route('auth.login') }}" class="underline text-blue-500">Login</a>
                </div>
                <div>
                    <button type="submit" class="w-full px-4 py-2 bg-blue-500 rounded-lg text-white">
                        Register
                    </button>
                </div>
            </form>
        </div>
        <div class="hidden md:block md:w-6/12">
            <img src="{{ asset('asset/img/register.jpg') }}" alt="Register Image" class="w-full h-full object-cover rounded-r-lg">
        </div>
    </div>

</div>
@endsection
