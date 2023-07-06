<x-layout>
    <section class="container-fluid bg-dark">
        <div class="row vh-100 align-items-center justify-content-center">
            <div class="col-12">
                <h1 class="display-1 text-center text-white">Benvenuti in Gaming81</h1>
            </div>
        </div>
            @if (session('alertmessage'))
            <div class="alert alert-success">
                    {{ session('alertmessage') }}
            </div>
            @endif
    </section>

    <section class="container">
        <div class="row justify-content-around mt-5 py-5">
            @foreach ($giochi as $gioco)
            <div class="col-4">
                <x-cardGame :gioco="$gioco"></x-cardGame>
            </div>
            @endforeach
        </div>
    </section>
</x-layout>