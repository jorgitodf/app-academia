<div class="mt-3 px-3 py-5 flex flex-col space-y-2 sm:mx-auto sm:w-full sm:max-w-sm flex" role="alert">
    @if($errors->any())
        @foreach($errors->all() as $error)

        <div class="border border-t-1 border-red-400 rounded bg-red-100 px-3 py-3 text-red-700 text-center border-solid sm:border-dashed md:border-dotted lg:border-double xl:border-none">
            {{ $error }}
        </div>
        @endforeach

    @endif
</div>
