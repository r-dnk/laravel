<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <a class="my-0 mr-md-auto font-weight-normal p-2 text-dark" href="{{ route('home') }}">ProgLife</a>
    <nav class="my-2 my-md-0 mr-md-3">
            @if (Route::has('login'))
                    @auth
                        <a class="p-2 text-dark" href="{{ route('home') }}">Home</a>
                        <a class="p-2 text-dark" href="{{ route('about') }}">About</a>
                        <a class="p-2 text-dark" href="{{ route('contact') }}">Contacts</a>
                        <a class="p-2 text-dark" href="{{ route('contact-data') }}">Messages</a>

                <a id="navbarDropdown" class="p-2 text-blue" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <a class="p-2 text-blue" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                    @endauth

            @endif

                @guest
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>

                @endguest

    </nav>
</div>
