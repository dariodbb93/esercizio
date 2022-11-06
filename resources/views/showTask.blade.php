<x-layout>
    <div class="container-fluid min-vh-100 d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-12">
                <table class="table table-dark table-sm">
                    <thead>
                        <tr>
                            <th scope="col">Nome del task</th>
                            <th scope="col">Descrizione del task</th>
                            <th scope="col">stato del task </th>
                            <th scope="col">Progetto collegato </th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <td> {{ $task->taskTitle }} </td>
                                <td> {{ $task->taskDescription }} </td>
                                <td> {{ $task->status }} </td>
                                <td> {{ $task->project->nameProject }} </td>
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
