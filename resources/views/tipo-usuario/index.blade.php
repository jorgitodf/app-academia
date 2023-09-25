@extends('layouts.app')

@section('title', 'Tipo Usuário')

@section('content')

    <div class="ms-72 flex min-h-full flex-col justify-center px-3 py-5 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                alt="Your Company">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Tipos de Usuário
            </h2>
        </div>
        <div class="mt-0 border-t border-gray-100">
            <dl class="divide-y divide-gray-100">
                @foreach($type_users->items() as $type_user)
                    <div class="px-4 py-6 sm:grid sm:grid-cols-2 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">{{ $type_user->type }}</dt>
                        <dd class="text-sm font-medium leading-6 text-gray-900">
                            <button type="button"
                                class="inline-flex rounded-full hover:rounded-lg items-center rounded-md bg-blue px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                    <svg class="-ml-0.5 mr-1.5 h-5 w-5 text-blue-400" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path
                                            d="M2.695 14.763l-1.262 3.154a.5.5 0 00.65.65l3.155-1.262a4 4 0 001.343-.885L17.5 5.5a2.121 2.121 0 00-3-3L3.58 13.42a4 4 0 00-.885 1.343z" />
                                    </svg>
                                    <a class="" href="{{ route('type-user.edit', $type_user->id) }}">Editar</a>
                            </button>
                        </dd>
                    </div>
                 @endforeach
            </dl>
        </div>
        <x-pagination :paginator="$type_users"/>
        <div>
            <button type="submit"
                class="mt-6 justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm
                font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline
                focus-visible:outline-2 focus-visible:outline-offset-2
                focus-visible:outline-indigo-600"><a class="" href="{{ route('type-user.create') }}">Novo Tipo de Usuário</a></button>
        </div>
    </div>

@endsection()
