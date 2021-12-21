@if (Auth::user())
<div class="sm:w-4/5 mx-auto">
    <span class="p-3 bg-gray-800 text-gray-100 font-bold text-lg block w-28 text-center rounded">{{count($words)}} Eray</span>
</div>
@endif
<section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md  sm:shadow-lg sm:w-4/5 mx-auto my-4">

    <header class="font-bold text-2xl bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
        Dhamaan Erayada
    </header>

<div class="w-full p-6 overflow-y-scroll" style="max-height:500px;">

    <table class="w-full">
        @if (Auth::user())
          <tr>
           <th class="text-left py-2">Erayga</th>
           <th class="text-left py-2 flex justify-end">Beddel/Tirtir</th>
        </tr>
        @endif
        @foreach ($words as $word)
        <tr>
                <td class="py-2 my-1"><a class="block rounded mx-2 capitalize" href="/erayada/{{$word->slug}}">{{$word['erayga']}}</a></td>
                @if (Auth::user())
                   <td class="py-2 flex justify-end"><a href="/erayada/{{$word->slug}}/edit" class="bg-gray-600 p-2 text-green-100 rounded">Beddel</a>
                    <form action="/erayada/{{$word->slug}}" method="POST" class="ml-2 pr-2">
                        @csrf
                        @method('delete')
                        <button class="bg-red-600 p-2 text-green-100 rounded" type="submit">Tirtir</button>
                    </form>
                </td>
                @endif
            </tr>
            @endforeach
       </table>
    </div>
</section>