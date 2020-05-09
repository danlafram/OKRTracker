<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <!-- Header -->
        <div>
            <h1>Your personal OKR tracker</h1>
            @auth
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>    
            @endauth
        </div>
        <!-- End Header -->

        <!-- Content -->
        <div>
            <div>
                @auth
                <a href="/create">Create Your OKRs</a>
                @endauth
                @guest
                <span><a href="/login">Login</a> or <a href="/register">Register</a> to create your OKRs</span>
                @endguest
            </div>
            @foreach ($objectives as $objective)
            <div>
                <h4>Objective: <span>{{ $objective->name}}</span></h4>
                <div>
                    <h5>Key Results</h5>
                    <ul>
                        @foreach ($key_results as $key_result)
                            <li>{{ $key_result->name }}</li>
                        @endforeach
                    </ul>
                <div>
                    <span>Target Date: {{ $objective->target_date }}</span>
                </div>
                </div> 
            </div>
            @endforeach
        </div>
        <!-- End Content -->
    </body>
</html>
