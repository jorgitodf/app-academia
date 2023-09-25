@csrf()
<div>
    <label for="type" class="block text-sm font-medium leading-6 text-gray-900">Tipo de Usuário:</label>
    <div class="mt-2">
        <input id="type" name="type" type="text" value="{{ $type_user->type ?? old('type') }}" placeholder="" class="text-sm text-gray-base w-full mr-3 py-5 px-4 h-2 border border-gray-200 rounded mb-3
            block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
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
