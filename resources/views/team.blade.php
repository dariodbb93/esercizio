<x-layout>
    <div class="container-fluid backgroundContainer min-vh-100  d-flex align-items-center justify-content-center">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1>Creazione del nuovo Team </h1>
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                <form action="{{ route('storeTeam') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-bolder"> Nome del team </label>
                        
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="teamMember" required>
                                <option value="Red"> Red </option>
                                <option value="Blue"> Blue </option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bolder"> Responsabile del team </label>

                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="ceo" required>
             
                            @foreach ($admins as $admin)
                                <option value="{{ $admin->id }}"  required> {{ $admin->surname }} {{ $admin->name }} 
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
