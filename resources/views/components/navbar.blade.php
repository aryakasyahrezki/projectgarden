<nav class="navbar-dark-custom">
    <div class="container d-flex align-items-center justify-content-between">

        <a href="/" style="color: var(--color-dark-text); text-decoration: none; font-weight: 700; font-size: 0.95rem;">
            🌿 projectgarden
        </a>

        <div class="nav-pill-group">
            <a href="/" class="nav-pill-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
            <a href="/projects" class="nav-pill-link {{ request()->is('projects*') ? 'active' : '' }}">Projects</a>
            <a href="#" class="nav-pill-link">About</a>
        </div>

        <a href="https://github.com/YOUR_USERNAME" target="_blank"
           style="color: var(--color-dark-muted); text-decoration: none; font-size: 0.82rem; font-weight: 500;">
            GitHub ↗
        </a>

    </div>
</nav>