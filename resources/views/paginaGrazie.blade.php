<x-layout>
    <section class="container-fluid bg-dark">
        <div class="row py-5 mt-5">
            <div class="col-12">
                <h1 class="display-1 text-center text-white">Grazie per averci contattato {{$nomeReindirizzato}}</h1>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row py-5 mt-5">
            <div class="col-12">
                <h2 class="display-2 text-center">Potrebbero interessarti questi articoli</h2>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row mt-5">
            @foreach($giochiProposti as $giocoProposto)
            <div class="col-4">
                <x-cardGame :gioco="$giocoProposto"></x-cardGame>
            </div>
            @endforeach
        </div>
    </section>

</x-layout>