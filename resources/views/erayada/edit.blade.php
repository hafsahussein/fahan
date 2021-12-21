@extends('layouts.admin')

@section('content')
    <main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">

    <div class="w-full sm:px-6">
        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-lg">
            <h2 class="bg-gray-200 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md text-2xl capitalize font-bold text-gray-700">Wax ka beddel erayga</h2>
        <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8"
         method="POST"
         action="/erayada/{{$word->slug}}"
         enctype="multipart/form-data"
         >
        @csrf
        @method('PUT')
        <div class="flex flex-wrap">
            <label class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
               Erayga:
            </label>

            <input type="text"
                class="form-input w-full @error('erayga') border-red-500 @enderror" name="erayga"
                value="{{ $word->erayga }}">

            @error('erayga')
            <p class="text-red-500 text-xs italic mt-4">
                {{ $message }}
            </p>
            @enderror
        </div>

        <div class="flex flex-wrap">
            <label class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
               Nooca:
            </label>

            <select
                class="form-input w-full @error('nooca') border-red-500 @enderror" name="nooca"
                required>
                <option value="" style ="color:#333;">Dooro</option>
                <option value="magac" @if ($word->nooca=='magac')
                    selected
                @endif >Magac</option>
                <option value="magac-u-yaal" @if ($word->nooca=='magac-u-yaal')
                    selected
                @endif>Magac U yaal</option>
                <option value="fal" @if ($word->nooca=='fal')
                    selected
                @endif>Fal</option>
                <option value="fal-kaab" @if ($word->nooca=='fal-kaab')
                    selected
                @endif>Fal Kaab</option>
                <option value="tilmaame" @if ($word->nooca=='tilmaame')
                    selected
                @endif>Tilmaame</option>
                <option value="xiriiriye" @if ($word->nooca=='xiriiriye')
                    selected
                @endif >Xiriiriye/Xidhiidhiye</option>
                <option value="meeleeye" @if ($word->nooca=='meeleeye')
                    selected
                @endif>Meeleeye</option>
                <option value="qodob" @if ($word->nooca=='qodob')
                    selected
                @endif>Qodob</option>
                <option value="yaab"@if ($word->nooca=='yaab')
                    selected
                @endif>Yaab</option>
            </select>

            @error('nooca')
            <p class="text-red-500 text-xs italic mt-4">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="flex flex-wrap">
            <label class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
               Qeexitaannada:
            </label>

            <textarea type="text"
                class="form-input w-full @error('qeexitaannada') border-red-500 @enderror" name="qeexitaannada"
                required>{{ $word->qeexitaannada }}</textarea>

            @error('qeexitaannada')
            <p class="text-red-500 text-xs italic mt-4">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="flex flex-wrap">
            <label class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
               La Micne ah:
            </label>

            <input type="text"
                class="form-input w-full @error('la_micne_ah') border-red-500 @enderror" name="la_micne_ah"
                value="{{ $word->la_micne_ah }}">

            @error('la_micne_ah')
            <p class="text-red-500 text-xs italic mt-4">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="flex flex-wrap">

        <label class="w-44 flex flex-col items-center px-2 py-3 bg-transparent rounded-xl 
        shadow-lg tracking-wide uppercase  cursor-pointer ">
        <span class="my-1 uppercase text-base text-gray-900">Select image</span>
        <input 
        type="file"
        name="image"
        class="hidden"
        >
    </label>
        @error('image')
        <p class="text-red-500 text-xs italic mt-4 w-full">
            {{ $message }}
        </p>
        @enderror
        </div>
        <div class="flex w-44 flex-wrap">
            <button type="submit"
                class="w-full select-none font-bold whitespace-no-wrap px-5 py-2 mb-6 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
            Beddel
            </button>
        </div>
    </form>
        </section> 
    </div>
</main>
@endsection