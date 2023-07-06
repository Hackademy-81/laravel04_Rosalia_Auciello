<x-layout>
    <section class="container">
        <div class="row justify-content-around mt-5 py-5">
            <div class="col-12">
               <h2 class="text-center display-2">{{$unicoGioco["name"]}}</h2> 
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row justify-content-around mt-5 py-5">
            <div class="col-12">
              <x-cardGame :gioco="$unicoGioco"></x-cardGame>
            </div>
        </div>
    </section>
</x-layout>