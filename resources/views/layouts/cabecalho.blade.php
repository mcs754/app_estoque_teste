<meta name="csrf-token" content="{{ csrf_token() }}">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/home/">Home</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
            <li class="nav-item"><a href="/produtos/inserir/" class="nav-link">Cadastrar Produto</a></li>
            <li class="nav-item"><a href="/produtos/pesquisar/" class="nav-link">Pesquisar Produto</a></li>
        </ul>
    </div>

    <a class="navbar-brand" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        {{ __('Sair') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        </form>
</nav>
