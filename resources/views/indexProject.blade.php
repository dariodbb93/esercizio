<x-layout>
    <div class="container-fluid min-vh-100 d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-12">
                <table class="table table-dark table-sm">
                    <thead>

                        <h1>Qui vengono mostrati i progetti scaduti alla data odierna </h1>

                        <tr>
                            <th scope="col">Nome Progetto</th>
                            <th scope="col">Descrizione Progetto</th>
                            <th scope="col">Data di scadenza</th>
                            <th scope="col">Team assegnatario </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            @if ($project->dateExipiration < now())
                                <tr>
                                    <td> {{ $project->nameProject }} </td>
                                    <td> {{ $project->aboutProject }} </td>
                                    <td> {{ $project->dateExipiration }} </td>
                                    <td> {{ $project->team->teamMember }} </td>
                                    </td>
                                </tr>
                            @endif
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</x-layout>
