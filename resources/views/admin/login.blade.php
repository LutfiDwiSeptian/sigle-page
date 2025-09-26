
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            min-height: 100vh;
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #4f8cff 0%, #6ee7b7 100%);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            background: #fff;
            padding: 2.5rem 2rem;
            border-radius: 1.25rem;
            box-shadow: 0 8px 32px rgba(0,0,0,0.15);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .login-card h1 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: #2563eb;
        }
        .login-card .icon {
            font-size: 2.5rem;
            color: #2563eb;
            margin-bottom: 1rem;
        }
        .login-card label {
            display: block;
            text-align: left;
            font-weight: 500;
            margin-bottom: 0.5rem;
            color: #374151;
        }
        .login-card input[type="email"],
        .login-card input[type="password"] {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #d1d5db;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
            font-size: 1rem;
            transition: border-color 0.2s;
        }
        .login-card input[type="email"]:focus,
        .login-card input[type="password"]:focus {
            border-color: #2563eb;
            outline: none;
        }
        .login-card .remember {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        .login-card .remember label {
            margin: 0;
            font-size: 0.95rem;
        }
        .login-card button {
            width: 100%;
            background: linear-gradient(90deg, #2563eb 0%, #4f8cff 100%);
            color: #fff;
            font-weight: 700;
            padding: 0.75rem;
            border: none;
            border-radius: 0.5rem;
            font-size: 1.1rem;
            cursor: pointer;
            box-shadow: 0 2px 8px rgba(79,140,255,0.15);
            transition: background 0.2s;
        }
        .login-card button:hover {
            background: linear-gradient(90deg, #4f8cff 0%, #2563eb 100%);
        }
        .login-card .error {
            color: #dc2626;
            background: #fee2e2;
            border-radius: 0.5rem;
            padding: 0.75rem;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="icon">
            <i class="fa-solid fa-user-lock"></i>
        </div>
        <h1>Login Admin</h1>

        @if ($errors->any())
            <div class="error">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ Route('admin.proseslogin') }}" method="POST">
            @csrf
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit">
                <i class="fa-solid fa-right-to-bracket"></i> Login
            </button>
        </form>
    </div>
</body>
</html>
