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
            <form action="{{ route('user.store') }}" method="POST">
                @csrf()
                <div class="space-y-1">
                    <div class="pb-8">
                        <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-3">
                                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nome Completo:</label>
                                <div class="mt-1">
                                    <input type="text" name="name" id="name" autocomplete="given-name"
                                        class="text-sm text-gray-base w-full mr-3 py-4 px-4 h-2 border border-gray-200 rounded mb-4
                                        block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-1">
                                <label for="cpf" class="block text-sm font-medium leading-6 text-gray-900">CPF:</label>
                                <div class="mt-1">
                                    <input type="text" name="cpf" id="cpf" autocomplete="family-name"
                                        class="text-sm text-gray-base w-full mr-3 py-4 px-4 h-2 border border-gray-200 rounded mb-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">E-mail:</label>
                                <div class="mt-1">
                                    <input id="email" name="email" type="email" autocomplete="email"
                                        class="text-sm text-gray-base w-full mr-3 py-4 px-4 h-2 border border-gray-200 rounded mb-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="col-span-2">
                                <label for="profession"
                                    class="block text-sm font-medium leading-6 text-gray-900">Profissão: </label>
                                <div class="mt-1">
                                    <input type="text" name="profession" id="profession"
                                        autocomplete="profession"
                                        class="text-sm text-gray-base w-full mr-3 py-4 px-4 h-2 border border-gray-200 rounded mb-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="col-span-2">
                                <label for="birth_date"
                                    class="block text-sm font-medium leading-6 text-gray-900">Data Nascimento: </label>
                                <div class="mt-1">
                                    <input type="text" name="birth_date" id="birth_date"
                                        autocomplete="birth_date"
                                        class="text-sm text-gray-base w-full mr-3 py-4 px-4 h-2 border border-gray-200 rounded mb-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="gender"
                                    class="block text-sm font-medium leading-6 text-gray-900">Sexo:</label>
                                <div class="mt-1">
                                    <select id="gender" name="gender" autocomplete="gender"
                                        class="text-sm text-gray-base w-full mr-3 py-4 px-4 h-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                        <option></option>
                                        <option>Feminino</option>
                                        <option>Masculino</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-span-2">
                                <label for="fixed"
                                    class="block text-sm font-medium leading-6 text-gray-900">Telefone: </label>
                                <div class="mt-1">
                                    <input type="text" name="fixed" id="fixed"
                                        autocomplete="fixed"
                                        class="text-sm text-gray-base w-full mr-3 py-4 px-4 h-2 border border-gray-200 rounded mb-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="col-span-2">
                                <label for="mobile"
                                    class="block text-sm font-medium leading-6 text-gray-900">Celular: </label>
                                <div class="mt-1">
                                    <input type="text" name="mobile" id="mobile"
                                        autocomplete="mobile"
                                        class="text-sm text-gray-base w-full mr-3 py-4 px-4 h-2 border border-gray-200 rounded mb-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="public_places"
                                    class="block text-sm font-medium leading-6 text-gray-900">Logradouro:</label>
                                <div class="mt-1">
                                    <select id="public_places" name="public_places" autocomplete="public_places"
                                        class="text-sm text-gray-base w-full mr-3 py-4 px-4 h-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                        <option></option>
                                    </select>
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="description"
                                    class="block text-sm font-medium leading-6 text-gray-900">Endereço:</label>
                                <div class="mt-1">
                                    <input type="text" name="description" id="description" autocomplete="description"
                                        class="text-sm text-gray-base w-full mr-3 py-4 px-4 h-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="complement"
                                    class="block text-sm font-medium leading-6 text-gray-900">Complemento:</label>
                                <div class="mt-1">
                                    <input type="text" name="complement" id="complement" autocomplete="complement"
                                        class="text-sm text-gray-base w-full mr-3 py-4 px-4 h-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-1">
                                <label for="number"
                                    class="block text-sm font-medium leading-6 text-gray-900">Número:</label>
                                <div class="mt-1">
                                    <input type="text" name="number" id="number" autocomplete="number"
                                        class="text-sm text-gray-base w-full mr-3 py-4 px-4 h-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-1">
                                <label for="zip_code"
                                    class="block text-sm font-medium leading-6 text-gray-900">CEP:</label>
                                <div class="mt-1">
                                    <input type="text" name="zip_code" id="zip_code" autocomplete="zip_code"
                                        class="text-sm text-gray-base w-full mr-3 py-4 px-4 h-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="neighborhood"
                                    class="block text-sm font-medium leading-6 text-gray-900">Bairro:</label>
                                <div class="mt-1">
                                    <input type="text" name="neighborhood" id="neighborhood" autocomplete="neighborhood"
                                        class="text-sm text-gray-base w-full mr-3 py-4 px-4 h-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="citie"
                                    class="block text-sm font-medium leading-6 text-gray-900">Cidade:</label>
                                <div class="mt-1">
                                    <input type="text" name="citie" id="citie" autocomplete="citie"
                                        class="text-sm text-gray-base w-full mr-3 py-4 px-4 h-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="state"
                                    class="block text-sm font-medium leading-6 text-gray-900">UF</label>
                                <div class="mt-1">
                                    <select id="state" name="state" autocomplete="state"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pb-8">
                        <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="col-span-full">
                                <label for="foto" class="block text-sm font-medium leading-6 text-gray-900">Foto</label>
                                <div class="mt-2 flex items-center gap-x-3">
                                    <svg class="h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <button type="button"
                                        class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Mudar</button>
                                </div>
                            </div>

                            <div class="col-span-full">
                                <div
                                    class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                    <div class="text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                            <label for="photo"
                                                class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                                <span>Enviar um arquivo</span>
                                                <input id="photo" name="photo" type="file" class="sr-only">
                                            </label>
                                            <p class="pl-1">ou arraste e solte</p>
                                        </div>
                                        <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF até 15MB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-5 flex items-center justify-end gap-x-6">
                    <button type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm
                        hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2
                        focus-visible:outline-indigo-600">Salvar</button>
                </div>
            </form>


            <x-alert />
            <x-messages />
        </div>
    </div>

@endsection()
