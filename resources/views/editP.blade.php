<x-layout>


    <div class="container-fluid backgroundContainer min-vh-100  d-flex align-items-center justify-content-center">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1>Modifica il nome del progetto </h1>
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                <form action="{{route('updateProject', compact('project'))}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label fw-bolder"> Modifica il Nome del progetto  </label>
                        <input type="text" class="form-control" name="name" value="{{$project->nameProject}}">
                    </div>
                    <button type="submit" class="btn btn-dark">Modifica il nome del progetto </button>
                </form>
            </div>
        </div>
    </div>









</x-layout>