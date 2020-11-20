<nav class="p-6 bg-white flex justify-between mb-6">
    <ul class="flex items-center">
        <li id="logoImg" style="padding: 0 15px; margin: -10px; padding-right: 25px;">
            <a href="">
                <img src="{{ asset('posty.png') }}" style="width:30px;" alt="Posty-Logo" />
            </a>
        </li>

        <li>
            <a href="{{ route('home') }}" class="p-3">Home</a>
        </li>

        <li>
            <a href="{{ route('dashboard') }}" class="p-3">Dashboard</a>
        </li>

        <li>
            <a href="{{ route('posts') }}" class="p-3">Posts</a>
        </li>
    </ul>

    <ul class="flex items-center">
        @auth
            <li>
                <a href="" class="p-3">{{ auth()->user()->name }}</a>
            </li>

            <li>
                <form action="{{ route('logout') }}" method="post" class="p-3 inline">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>
        @endauth

        @guest
            <li>
                <a href="{{ route('login') }}" class="p-3">Login</a>
            </li>

            <li>
                <a href="{{ route('register') }}" class="p-3">Register</a>
            </li>
        @endguest
    </ul>
</nav>