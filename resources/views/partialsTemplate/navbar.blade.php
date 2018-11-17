<aside data-mcs-theme="minimal-dark" style="background-image: url(/img/template/backgrounds/11.jpg)" class="main-sidebar mCustomScrollbar">
    <div class="user">
        <h4 class="fs-16 text-muted mt-15 mb-5 fw-300">{{ Session::get('name') }}</h4>
        <p class="mb-0 text-muted">Designer</p>
    </div>
    <ul class="list-unstyled navigation mb-0">
        @yield('modules')
    </ul>
</aside>