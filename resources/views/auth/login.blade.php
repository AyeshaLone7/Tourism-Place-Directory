
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | DiscoverPK</title>

    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            min-height: 100vh;
            display: grid;
            place-items: center;
            padding: 25px;
            font-family: Arial, sans-serif;
            color: white;
            background:
                linear-gradient(120deg, #06152be8, #07152b99),
                url('https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=2000&q=85')
                center/cover fixed;
        }

        .brand {
            position: absolute;
            top: 24px;
            left: 5%;
            font-size: 29px;
            font-weight: bold;
        }

        .brand span { color: #ffad18; }

        .card {
            width: 100%;
            max-width: 440px;
            padding: 38px;
            border: 1px solid #ffffff40;
            border-radius: 22px;
            background: #071a35d9;
            backdrop-filter: blur(14px);
            box-shadow: 0 20px 60px #0005;
        }

        .eyebrow {
            color: #ffb326;
            text-align: center;
            font-size: 14px;
            letter-spacing: 2px;
        }

        h1 { text-align: center; margin-bottom: 8px; }
        .subtitle { text-align: center; color: #cbd5e1; }

        label {
            display: block;
            margin: 20px 0 8px;
            font-size: 14px;
        }

        input {
            width: 100%;
            padding: 14px;
            border: 1px solid #7187a7;
            border-radius: 10px;
            background: #ffffff0b;
            color: white;
            font-size: 15px;
        }

        input:focus {
            outline: 2px solid #ffad18;
            border-color: transparent;
        }

        .remember {
            display: flex;
            align-items: center;
            gap: 9px;
            margin: 17px 0;
            color: #dbe4f1;
            font-size: 14px;
        }

        .remember input { width: auto; accent-color: #ffad18; }

        button {
            width: 100%;
            padding: 15px;
            border: 0;
            border-radius: 10px;
            background: linear-gradient(90deg, #ffc044, #ff8c13);
            color: #101b2b;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover { filter: brightness(1.08); }

        .footer {
            margin-top: 24px;
            text-align: center;
            color: #dbe4f1;
            font-size: 14px;
        }

        a { color: #ffb326; text-decoration: none; }
        a:hover { text-decoration: underline; }

        .error {
            color: #ffb4b4;
            font-size: 13px;
            margin-top: 7px;
        }

        @media (max-width: 480px) {
            .card { padding: 25px; }
            .brand { font-size: 24px; }
        }
    </style>
</head>
<body>

    <div class="brand"><span>Discover</span>PK</div>

    <main class="card">
        <p class="eyebrow">YOUR NEXT ADVENTURE</p>
        <h1>Welcome Back!</h1>
        <p class="subtitle">Sign in to explore Pakistan.</p>

        @if ($errors->any())
            <div class="error">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('login.store') }}">
            @csrf

            <label for="email">Email Address</label>
            <input id="email" type="email" name="email"
                   value="{{ old('email') }}"
                   placeholder="you@example.com"
                   autocomplete="email" required>

            <label for="password">Password</label>
            <input id="password" type="password" name="password"
                   placeholder="Enter your password"
                   autocomplete="current-password" required>

            <label class="remember">
                <input type="checkbox" name="remember" value="1">
                Remember me
            </label>

            <button type="submit">Login &rarr;</button>
        </form>

        <div class="footer">
            New to DiscoverPK?
            <a href="{{ route('register') }}">Create an account</a>
        </div>
    </main>

</body>
</html>
