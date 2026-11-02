<!DOCTYPE html>
<html lang="en">
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DiscoverPK - Luxury Pakistan Tourism Directory</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-slate-950 text-slate-100 min-h-screen flex flex-col font-['Inter']">
    

    <nav class="fixed top-0 left-0 right-0 z-50 backdrop-blur-md bg-slate-950/70 border-b border-slate-800">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-2xl font-bold text-white tracking-wide"><span class="text-amber-500">Discover</span>PK</a>
            <div class="space-x-8 font-medium text-slate-300">
                <a href="{{ route('home') }}" class="hover:text-amber-400 transition">Home</a>
                <a href="{{ route('about') }}" class="hover:text-amber-400 transition">About Us</a>
                <a href="{{ route('contact') }}" class="hover:text-amber-400 transition">Contact Us</a>
                <a href="{{ route('places.search') }}" class="hover:text-yellow-500 font-semibold">Explore Places</a>
    

  @guest
                    <a href="{{ route('login') }}"
                       class="hover:text-amber-400 transition">
                        Login
                    </a>

                    <a href="{{ route('register') }}"
                       class="bg-amber-500 hover:bg-amber-400 text-slate-950 px-4 py-2 rounded-lg transition font-semibold">
                        Sign Up
                    </a>
                @endguest

                @auth
                <span class="text-slate-300">
                    Hi, {{ auth()->user()->name }}
                </span>

                <form action="{{ route('logout') }}"
                      method="POST"
                      class="inline-flex m-0 shrink-0">
                    @csrf

                    <button type="submit"
                            class="bg-amber-500 hover:bg-amber-400 text-slate-950 px-5 py-2 rounded-lg font-semibold whitespace-nowrap">
                        Logout
                    </button>
                </form>
            @endauth
            
@auth
    <a href="{{ route('favorites.index') }}"
       class="hover:text-amber-400 transition font-semibold">
        ♥ My Favorites
    </a>
@endauth

            </div>
        </div>
    </nav>
    <div class="pt-20 flex-grow">
        @yield('content')
    </div>
    <footer class="bg-slate-900 border-t border-slate-800 py-8 text-center text-slate-400 mt-16">
        <p>&copy; {{ date('Y') }} DiscoverPK. Luxury Travel 
            <br>Developed By:
            <br>Ayesha Abdul Aziz <br> @Soulwp.com</p>
    </footer>
</body>
</html>