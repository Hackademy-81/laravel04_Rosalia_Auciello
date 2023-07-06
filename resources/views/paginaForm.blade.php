<x-layout>
    <section class="container py-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <form method="POST" action="{{route("contact-us")}}">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control"  name="email">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputText" class="form-label">Nome e Cognome</label>
                      <input type="text" class="form-control" name="nameSurname">
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" name="message" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Comments</label>
                      </div>
                    <button type="submit" class="btn btn-primary mt-5">Submit</button>
                </form>
                <div class="container py-5 mt-5">
                    <div class="row">
                        <div class="col-12">
                            @if (session('alertmessage'))
                            <div class="alert alert-success">
                                    {{ session('alertmessage') }}
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>