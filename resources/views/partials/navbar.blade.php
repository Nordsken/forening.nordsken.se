<nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
        <li class="name"></li>
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    </ul>

    <section class="top-bar-section">
        <!-- Left Nav Section -->
        <ul class="left">
            <li class="{{ is_active('/') }}"><a href="{{ route('frontpage') }}">Start</a></li>
            <li class="{{ is_active('/') }}"><a href="{{ route('frontpage') }}">Om föreningen</a></li>
            <li class="{{ is_active('/') }}"><a href="{{ route('frontpage') }}">Styrelsen</a></li>
            <li class="{{ is_active('/') }}"><a href="{{ route('frontpage') }}">Stadgar</a></li>
        </ul>
    </section>
</nav>