<aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
        <h5>My Profile | {{ucfirst(Auth::user()->type)}}</h5>
          <p>Account settings</p>
          <a href="{{ route('logout') }}" class="btn btn-outline-warning btn-block" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>

        </div>
</aside>
