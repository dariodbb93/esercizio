<x-layout>
    <div class="container-fluid min-vh-100 ">
        <div class="row">
            <table class="table table-dark table-sm">
                <thead>
                    <tr>
                        <th scope="col">Nome Sviluppatore</th>
                        <th scope="col">Cognome Sviluppatore</th>
                        <th scope="col">Colore del Team</th>
                        <th scope="col">Responsabile del Team</th>
                        <th scope="col"> Modifica i dati anagrafici </th>
                        <th scope="col"> Elimina lo sviluppatore </th>
                    </tr>

                </thead>
                <tbody>
                    @foreach ($devs as $dev)
                        <tr>
                            <td> {{ $dev->nameDev }} </td>
                            <td> {{ $dev->surnameDev }} </td>
                            <td> {{ $dev->team->teamMember }} </td>
                            <td> {{ $dev->team->admin->surname }} </td>
                            <td> <a href="{{ route('edit', compact('dev')) }}" class="btn btn-dark mt-1">Modifica i dati
                                    anagrafici dello sviluppatore </a> </td>
                            <td>
                                <form action="{{ route('destroy', compact('dev')) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger mt-1" type="submit"> Cancella lo sviluppatore
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
