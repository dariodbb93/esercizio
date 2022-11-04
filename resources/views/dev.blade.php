<x-layout>
    <div class="container-fluid backgroundContainer min-vh-100  d-flex align-items-center justify-content-center">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1>Creazione del nuovo sviluppatore (DEV) </h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('storeDev') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-bolder"> Nome </label>
                        <input type="text" class="form-control" name="nameDev" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bolder"> Cognome </label>
                        <input type="text" class="form-control" name="surnameDev" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bolder"> Nome del team </label>

                        <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                            name="colore" required>
                            @foreach($teams as $team)
                            <option value="{{$team->id}}"> {{$team->teamMember}} </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-dark"> Conferma </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
