@extends('layouts.app')

@section('title', 'Tipo Usuário')

@section('content')

    <div class="ms-72 flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                alt="Your Company">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">{{ $legend }}
            </h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{ route('type-user.update') }}" method="POST">
                @csrf()
                @method('PUT')
                <div>
                    <label for="type" class="block text-sm font-medium leading-6 text-gray-900">Tipo de Usuário:</label>
                    <div class="mt-2">
                        <input id="type" name="type" type="text" value="{{isset($type_user->type) ? $type_user->type : ''}}"
                            class="text-sm text-gray-base w-full mr-3 py-5 px-4 h-2 border border-gray-200 rounded mb-3
                            block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <input type="hidden" id="id_type_user" name="id_type_user" value="{{isset($type_user->id) ? $type_user->id : ''}}">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <div class="text-sm">
                        </div>
                    </div>
                    <div class="mt-2">
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm
                        font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline
                        focus-visible:outline-2 focus-visible:outline-offset-2
                        focus-visible:outline-indigo-600">Salvar</button>
                </div>
            </form>
        </div>
    </div>

@endsection()
