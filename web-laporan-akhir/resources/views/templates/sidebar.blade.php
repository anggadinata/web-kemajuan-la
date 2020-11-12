<!--
    File ini merupakan file template, jangan dimerubah apapun yang ada disini
-->




<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('') }}assets/dist/img/logo_polinema.png" alt="Polinema Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Polinema</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('') }}assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">@yield('sidebar-user-name', 'User Name')</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        @yield('sidebar')
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>