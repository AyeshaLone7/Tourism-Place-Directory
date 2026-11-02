
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | DiscoverPK</title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0; min-height: 100vh;
            display: grid; place-items: center; padding: 25px;
            font-family: Arial, sans-serif; color: white;
            background: linear-gradient(120deg,#06152be8,#07152b99),
            url('https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=2000&q=85') center/cover fixed;
        }
        .brand { position: absolute; top: 24px; left: 5%; font-size: 29px; font-weight: bold; }
        .brand span, a { color: #ffad18; }
        .card { width: 100%; max-width: 440px; padding: 35px; border: 1px solid #ffffff40; border-radius: 22px; background: #071a35e8; backdrop-filter: blur(14px); }
        h1, .subtitle { text-align: center; }
        .subtitle { color: #cbd5e1; }
        label { display: block; margin: 17px 0 8px; font-size: 14px; }
        input { width: 100%; padding: 13px; border: 1px solid #7187a7; border-radius: 10px; background: #ffffff0b; color: white; }
        button { width: 100%; padding: 15px; margin-top: 24px; border: 0; border-radius: 10px; background: linear-gradient(90deg,#ffc044,#ff8c13); font-size: 16px; font-weight: bold; cursor: pointer; }
        .footer { text-align: center; margin-top: 22px; font-size: 14px; }
        .error { color: #ffb4b4; }
        a { text-decoration: none; }
        @media(max-width:480px) { .card { padding: 24px; } }
    </style>
</head>
<body>
    <div class="brand"><span>Discover</span>PK</div>

    <main class="card">
        <h1>Create Account</h1>
        <p class="subtitle">Start your journey across Pakistan.</p>

        @if ($errors->any())
            <div class="error">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('register.store') }}">
            @csrf

            <label for="name">Full Name</label>
            <input id="name" name="name" value="{{ old('name') }}"
                   autocomplete="name" required>

            <label for="email">Email Address</label>
            <input id="email" type="email" name="email"
                   value="{{ old('email') }}"
                   autocomplete="email" required>

            <label for="password">Password (minimum 8 characters)</label>
            <input id="password" type="password" name="password"
                   autocomplete="new-password" required>

            <label for="password_confirmation">Confirm Password</label>
            <input id="password_confirmation" type="password"
                   name="password_confirmation"
                   autocomplete="new-password" required>

            <button type="submit">Create Account &rarr;</button>
        </form>

        <div class="footer">
            Already registered?
            <a href="{{ route('login') }}">Login here</a>
        </div>
    </main>
</body>
</html>
