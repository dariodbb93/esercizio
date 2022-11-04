<x-layout>


    <div class="container-fluid backgroundContainer min-vh-100  d-flex align-items-center justify-content-center">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1>Modifica il nome e cognome dello Sviluppatore (DEV) </h1>
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                <form action="{{route('update', compact('dev'))}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label fw-bolder"> Modifica il Nome  </label>
                        <input type="text" class="form-control" name="nameDev" value="{{$dev->nameDev}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bolder"> Modifica il Cognome </label>
                        <input type="text" class="form-control" name="surnameDev" value="{{$dev->surnameDev}}">
                    </div>
                    <button type="submit" class="btn btn-dark">Modifica lo sviluppatore </button>
                </form>
            </div>
        </div>
    </div>









</x-layout>