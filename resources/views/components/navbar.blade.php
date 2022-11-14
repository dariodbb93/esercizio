<nav class="navbar navbar-expand-lg navBackground" id="navDark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"> </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @guest
                <li class="nav-item">
                    <a class="btn btn-light mx-1 px-2 my-1" href="{{ route('register') }}"> Registrati  </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-light mx-1 px-2 my-1" href="{{ route('login') }}"> Accedi  </a>
                </li>
                @else
                <li class="nav-item">
                    <a class="btn btn-light mx-1 px-2 my-1" href=""> Benvenuto {{ Auth::user()->name }} </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-light mx-1 px-2 my-1" href="{{ route('home') }}"> Creazione Team  </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-light mx-1 px-2 my-1" href="{{ route('showAdmins') }}"> Creazione del CEO </a>
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
                <li class="nav-item">
                    <a class="btn btn-light mx-1 px-2 my-1" href="{{ route('task') }}"> Inserisci un nuovo task </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-light mx-1 px-2 my-1" href="{{ route('showTask') }}"> Visualizza i task </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-light mx-1 px-2 my-1" href="{{ route('indexProject') }}"> Riepilogo dei progetti  </a>
                </li>
                <a class=" btn btn-light mx-1 px-2 my-1" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Logout </a>
            <form id='logout-form' action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            @endguest


            </ul>
        </div>
    </div>
</nav>
