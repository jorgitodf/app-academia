@extends('layouts.app')

@section('title', 'Aluno')

@section('content')

    <div class="ms-72 flex min-h-full flex-col justify-center px-3 py-5 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                alt="Your Company">
            <h2 class="mt-4 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">{{ $legend }}</h2>
        </div>

        <div class="mt-3">
            <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                @include('usuario.partials.form', compact('public_places', 'states'))
            </form>


            <x-alert />
            <x-messages />
        </div>
    </div>

@endsection()
