@extends('layouts.app')

@section('title', 'Tipo Usuário')

@section('content')

    <div class="ms-72 flex min-h-full flex-col justify-center px-3 py-5 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                alt="Your Company">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">{{ $legend }}
            </h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-2" action="{{ route('type-user.update', $type_user->id) }}" method="POST">
                @method('PUT')
                @include('tipo-usuario.partials.form', ['type_user' => $type_user])

                <x-alert/>
            </form>
        </div>
    </div>

@endsection()
