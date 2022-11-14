<x-layout>
    <div class="container-fluid backgroundContainer min-vh-100  d-flex align-items-center justify-content-center">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1>Creazione del nuovo sviluppatore (DEV) </h1>
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

                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="colore"
                            required>
                            @foreach ($admins as $admin)
                                <option value="{{ $admin->team->id }}"> {{ $admin->team->teamMember }} </option>
                            @endforeach
                        </select>


                        <label class="form-label fw-bolder"> Responsabile del team </label>

                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="admin_id"
                            required>
                            @foreach ($admins as $admin)
                                    <option value="{{ $admin->id }}" > {{ $admin->name }} {{ $admin->surname }}
                                    </option>

                            @endforeach
                        </select>

                    </div>
                    <button type="submit" class="btn btn-dark"> Conferma </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>



{{-- <select name="category_id">
    <option value="1"  {{ old('category_id') == 1 ? 'selected' : '' }}>
        Item 1
    </option>
    <option value="2" {{ old('category_id') == 2 ? 'selected' : '' }}>
        Item 2
    </option>
    <option value="3" {{ old('category_id') == 3 ? 'selected' : '' }}>
        Item 3
    </option>
</select> --}}