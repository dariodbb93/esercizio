<x-layout>
    <div class="container-fluid min-vh-100 d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-12">
                <table class="table table-dark table-sm">
                    <thead>
                        <tr>
                            <th scope="col">Nome Progetto</th>
                            <th scope="col">Descrizione Progetto</th>
                            <th scope="col">Data di scadenza</th>
                            <th scope="col">Team assegnatario</th>
                            <th scope="col"> Modifica il nome del progetto</th>
                            <th scope="col"> Elimina il progetto</th>

                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <td> {{ $project->nameProject }} </td>
                                <td> {{ $project->aboutProject }} </td>
                                <td> {{ $project->dateExipiration }} </td>
                                <td> {{ $project->team->teamMember }} </td>
                                <td> <a href="{{ route('updateProject', compact('project')) }}" class="btn btn-dark">
                                        Modifica il nome del progetto </a> </td>
                                <td>
                                    <form action="{{ route('destroyP', compact('project')) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" type="submit"> Cancella il progetto
                                        </button>
                                    </form> 
                            </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</x-layout>
