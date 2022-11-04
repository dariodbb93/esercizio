<x-layout>
    <div class="container-fluid min-vh-100 ">
        <div class="row">
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
                            <td> {{ $project->aboutProject  }} </td>
                            <td> {{ $project->dateExipiration }} </td>
                            <td> {{ $project->team->teamMember }} </td>
                            <td> <a href="{{ route('editP', compact('project')) }}" class="btn btn-dark mt-1"> Modifica il nome del progetto </a> </td>
                            <td>
                                <form action="{{ route('destroyP', compact('project')) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger mt-1" type="submit"> Cancella il progetto
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
</x-layout>
