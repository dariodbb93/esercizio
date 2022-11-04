<x-layout>
    <div class="container-fluid backgroundContainer min-vh-100  d-flex align-items-center justify-content-center">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1>Creazione del nuovo responsabile </h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('storeAdmin')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-bolder"> Nome  </label>
                        <input type="text" class="form-control" name="name" required >
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bolder"> Cognome </label>
                        <input type="text" class="form-control" name="surname" required>
                    </div>
                    <button type="submit" class="btn btn-dark"> Conferma  </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
