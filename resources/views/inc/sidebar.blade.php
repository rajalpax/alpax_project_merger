<!--Sidebar -->
<nav id="sidebar">
	<ul class="list-unstyled components">

		<li class="">
			<a href="#1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="text-align: center"><img style="height: 70px;">Sample</a>
			<ul class="collapse list-unstyled" id="1">

				<li class="">
					<a href="#"><img src="{{asset('img/nav_icons/speedometer.svg')}}" style="height: 20px; margin-right: 10px;">Dashboard</a>
				</li>
			</ul>
		</li>

	</ul>

	<ul class="list-unstyled CTAs">
		<li>
			<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }}</a>

			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
            </form>

		</li>
	</ul>
</nav>
<!-- Sidebar -->