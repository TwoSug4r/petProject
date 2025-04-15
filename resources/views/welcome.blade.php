<!DOCTYPE html>
<head>
    <title>Welcome</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-image: linear-gradient(135deg, black, white);
            min-height: 100vh;
            padding: 20px;
        }

        .content {
            position: fixed;
             top: 20px; 
             left: 20px;
        }   

        .button {
            display: inline-block;
            text-decoration: none;
            color: white;
            background-color: #dc3545;
            padding: 10px 20px;
            border-radius: 10px;
            font-size: 1rem;
            transition: background-color 0.3s, transform 0.2s;
        }

        .auth-buttons {
            position: fixed;
            top: 20px;
            right: 20px;
            display: flex;
            gap: 10px;
        }

        .logout-form {
            display: inline;
        }

        .logout-button {
            background: none;
            border: none;
            padding: 0;
            font: inherit;
            cursor: pointer;
            color: white;
            background-color: #dc3545;
            padding: 10px 20px;
            border-radius: 10px;
            font-size: 1rem;
            transition: background-color 0.3s, transform 0.2s;
            display: inline-block;
        }

        .logout-button:hover {
            background-color: #a71d2a;
            transform: translateY(-2px);
        }

        .welcome-message {
            margin-top: 20px;
            text-align: center;
            width: 100%;
        }
        
        .welcome-message h1 {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 10px;
        }

        @media (max-width: 600px) {
            .auth-buttons {
                top: 10px;
                right: 10px;
                flex-direction: column;
                gap: 5px;
            }

            .button, .logout-button {
                padding: 8px 15px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    @auth
        <div class="welcome-message">
            <h1>Привет, {{ Auth::user()->name }}!</h1>
        </div>
    @endauth
<div class="auth-buttons">
        @auth
            <form class="logout-form" method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="logout-button">Log Out</button>
            </form>
        @else
            <a class="button" href="{{ route('register') }}">Регистрация</a>
            <a class="button" href="{{ route('login') }}">Войти</a>
        @endauth
    </div>
    <div class="content">
        <a class="button" href="/users">Users</a>
    </div>
</body>