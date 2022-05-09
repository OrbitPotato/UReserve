<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block  sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ url('guidelines') }}">
            <i class="fas fa-newspaper" aria-hidden="true"> Guidelines</i>           
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('about-me') }}">
                <i class="fa fa-user-circle" aria-hidden="true"> About Me</i>              
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('reserve-equipment') }}">
            <i class="fa fa-wrench" aria-hidden="true"> Reserve Equipment</i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('reserve-rooms') }}">
            <i class="fa fa-building" aria-hidden="true"> Reserve Room</i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('my-history') }}">
            <i class="fa fa-history" aria-hidden="true"> My History</i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('my-deficiencies') }}">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"> My Deficiencies</i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/logout') }}">
            <i class="fa fa-sign-out" aria-hidden="true"> Logout</i>
            </a>
        </li>
        </ul>

    
    </div>
</nav>