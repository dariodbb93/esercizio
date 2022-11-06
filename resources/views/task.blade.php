<x-layout>
    <div class="container-fluid backgroundContainer min-vh-100  d-flex align-items-center justify-content-center">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1>Creazione di un nuovo task </h1>
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                <form action="{{ route('storeTask') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-bolder"> Titolo del task </label>
                        <input type="text" class="form-control" name="taskTitle" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bolder"> Descrizione del task </label>
                        <input type="text" class="form-control" name="taskDescription" required>
                    </div>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="nameProject"
                        required>
                        @foreach ($projects as $project)
                            <option value="{{ $project->id }}"> "{{ $project->nameProject }}" </option>
                        @endforeach
                    </select>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="status"
                        required>

                        <option value="in attesa"> in attesa </option>
                        <option value="in corso"> in corso </option>
                        <option value="completato"> completato </option>
                    </select>

                    {{-- in attesa, in corso, completato --}}

                    <button type="submit" class="btn btn-dark"> Conferma </button>
                </form>

            </div>
        </div>
    </div>
</x-layout>
