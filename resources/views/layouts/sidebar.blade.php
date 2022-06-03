<aside id="sidebar-wrapper">

    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ url('/') }}" class="small-sidebar-text">
            <img class="navbar-brand-full" src="{{ asset('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8TUwvfomI3gIKN_aYu0srr2GuEjiMDtQz4-YC99ToPyl11g2d_7NGsmjDZ91wOlSQcsE&usqp=CAU') }}" width="45px" alt=""/>
        </a>
    </div>
    <ul class="sidebar-menu">
        @include('layouts.menu')
    </ul>
</aside>
