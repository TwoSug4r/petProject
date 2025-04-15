<!DOCTYPE html>
<head>
    <meta charset="UTF-8" lang="eng">
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

        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        h1 {
            font-size: 2rem;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        .container {
            max-width: 600px;
            margin: 40px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .welcome-btn {
            position: fixed;
            top: 20px;
            right: 20px;
            display: inline-block;
            text-decoration: none;
            color: white;
            background-color: #dc3545;
            padding: 10px 20px;
            border-radius: 10px;
            font-size: 1rem;
            transition: background-color 0.3s, transform 0.2s;
        }

        .button {
            top: 20px;
            right: 20px;
            display: inline-block;
            text-decoration: none;
            color: white;
            background-color: #dc3545;
            padding: 8px 18px;
            border-radius: 8px;
            font-size: 1rem;
            transition: background-color 0.3s, transform 0.2s;
        }

        .input-group {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        @media (max-width: 600px) {
            .container {
                padding: 20px;
                margin: 20px auto;
            }

            input[type="text"],
            input[type="email"],
            input[type="password"],
            button {
                padding: 10px;
                font-size: 1rem;
            }

            .welcome-btn {
                top: 10px;
                right: 10px;
                padding: 8px 15px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <a class="welcome-btn" href="/">welcome</a>
    <div class="container">
        <h1>Регистрация</h1>
        <form method="post" action="{{ route('register') }}">
        @csrf
            <div class="input-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Введите ваше имя" value="{{ old('name') }}" required>
                @error('name')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Введите ваш email" value="{{ old('email') }}" required>
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Введите пароль" required>
                @error('password')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-group">
                <label for="password_confirmation">Password confirm</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Повторите пароль" required>
            </div>
            <button class="button" type="submit">Registration</button>
        </form>
    </div>
</body>