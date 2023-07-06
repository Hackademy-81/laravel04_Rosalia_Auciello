<div class="card">
    <img src="{{$gioco["img"]}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title text-center fw-bold">{{$gioco["name"]}}</h5>
      @if (Route::currentRouteName()=='homePage')
        <p class="card-text">{{$gioco["genre"]}}</p>
        <p class="card-text">{{$gioco["console"]}}</p>
        <p class="card-text">{{substr($gioco['description'],0,30)}}...</p>
        <a href="{{route('pageGame', ['idGame'=>$gioco["id"]])}}" class="btn btn-primary">Scopri di più</a>
      @else
        <p class="card-text">{{$gioco["description"]}}</p>
        <a href="{{route('homePage')}}" class="btn btn-primary">Torna Indietro</a>
      @endif  
    </div>
  </div>