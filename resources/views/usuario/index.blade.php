@extends('layouts.app')

@section('title', 'Usuário')

@section('content')

    <div class="ms-72 flex min-h-full flex-col justify-center px-3 py-5 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                alt="Your Company">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Alunos
            </h2>
        </div>
        <div class="mt-0 border-t border-gray-100">
            <div>
                <button type="submit"
                    class="mt-6 justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm
                    font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline
                    focus-visible:outline-2 focus-visible:outline-offset-2
                    focus-visible:outline-indigo-600"><a class="" href="{{ route('user.create') }}">Novo Aluno</a></button>
            </div>
        </div>
    </div>

@endsection()
