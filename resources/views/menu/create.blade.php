@extends('layouts.app')

@section('content')
    <div x-data="{sidebar:true, popupNavbar:false}" class="flex">
        @include('components.sidebar')
        <div class="min-h-screen" :class="sidebar ? 'w-10/12' : 'w-full'">
            @include('components.navbar')
            <div class="container mx-auto p-4">
                @include('menu.form', [
                    'title' => 'Tambah Menu',
                ])
            </div>

        </div>
    </div>
@endsection
