<nav class="navbar navbar-expand-lg" style="background-color: #bb85c5;">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}" style="font-size: 1.2rem; color: black;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}" style="font-size: 1.2rem; color: black;">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact.index') }}"
                        style="font-size: 1.2rem; color: black;">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/services') }}"
                        style="font-size: 1.2rem; color: black;">Services</a>
                </li>
                <!-- Más enlaces según sea necesario -->
            </ul>
        </div>
    </div>
</nav>
