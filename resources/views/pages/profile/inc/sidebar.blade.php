<div class="card" style="width: 18rem;">
    <ul class="list-group list-group-flush">
      <a href="{{ url('/home') }}" class="btn btn-primary btn-sm btn-block">Home</a>
      <a href="{{ route('user.order') }}" class="btn btn-primary btn-sm btn-block">My Bookings</a>
      <a href="{{ route('user.appoint') }}" class="btn btn-primary btn-sm btn-block">My Parlor Appointments</a>
      <a href="{{ route('user.rent') }}" class="btn btn-primary btn-sm btn-block">My Car Bookings</a>
      <a   class="btn btn-danger btn-sm btn-block" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        </form>
    </ul>
  </div>
