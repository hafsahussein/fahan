<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">
        <section class="flex flex-col sm:flex-row justify-between items-center break-words bg-white sm:border-1 sm:rounded-md sm:shadow-lg p-4">
               <div class="word-info">
                <h4 class="text-blue-900 text-xl font-bold capitalize">{{$word->erayga}}</h4>
                <ul>
                    @foreach (explode('.',$word->qeexitaannada) as $qxt)
                        <li class="text-gray-800 mt-1 leading-tight">{{$qxt}}</li>
                    @endforeach
                </ul>
                <h4 class="text-blue-900 text-lg font-black mt-4">Nooca</h4>
                <p class="text-gray-800 leading-tight mt-1">{{$word->nooca}}</p>
                <ul>
                    <h4 class="text-blue-900 text-lg font-black mt-4">Erayada la micnaha ah</h4>
                    @foreach (explode(',',$word->la_micne_ah) as $lm)
                        <li class="text-gray-800 mt-1 leading-tight">{{$lm}}</li>
                    @endforeach
                </ul>
            </div>
            @if ($word->image_path)
                
             <div class="word-img" style="max-width: 50%">
                <img src="{{asset('images/'.$word->image_path)}}" alt="sawirka erayga">
            </div>
            @endif
        </section>
    </div>
</main>
