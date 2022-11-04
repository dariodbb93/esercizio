<nav class="navbar navbar-expand-lg navBackground" id="navDark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"> </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="btn btn-light mx-1 px-2 my-1" href="{{ route('welcome') }}"> Creazione Responsabile </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-light mx-1 px-2 my-1" href="{{ route('showAdmins') }}"> Creazione Team </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-light mx-1 px-2 my-1" href="{{ route('showTeam') }}"> Creazione sviluppatore </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-light mx-1 px-2 my-1" href="{{ route('indexDev') }}"> Mostra gli sviluppatori </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-light mx-1 px-2 my-1" href="{{ route('projects') }}"> Inserisci un nuovo progetto </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-light mx-1 px-2 my-1" href="{{ route('showProjects') }}"> Mostra i progetti attivi </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
