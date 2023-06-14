<!DOCTYPE html>
<html>
<head>
    <title>Main Page - Simplicredit </title>
    <style>
        body {
            background-image: url('https://muj.onlinemanipal.com/wp-content/uploads/sites/2/2022/02/telework-6795505_960_720.webp');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            color: #fff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #f9fafb;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #1d3557;
            padding: 20px;
            display: flex;
            justify-content: space-between; /* Align items to the start and end of the header */
            align-items: center;
        }

        nav ul {
             list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: left; /* Align menu items to the left */
        }

        nav ul li {
            display: inline-block;
             margin-left: 10px; /* Adjust spacing between menu items */
        }

        nav ul li {
            display: inline-block;
            margin-left: 10px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
        }

        .auth-links {
            display: flex;
            align-items: center;
        }

        .auth-links a {
            color: #fff;
            text-decoration: none;
            margin-left: 10px;
        }

        main {
            padding: 50px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            margin: 50px auto;
            max-width: 800px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        main h1 {
            color: #1e88e5;
            font-size: 36px;
            margin-bottom: 20px;
        }

        main p {
            color: #333;
            font-size: 18px;
            margin-bottom: 40px;
        }
        footer {
            background-color: #1d3557;
            padding: 10px;
            text-align: center;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
        }

        footer p {
            margin: 0;
            color: #fff;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="auth-links">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </nav>
    </header>

    <main>
        <h1>Welcome to the Simplicredit Website!</h1>
        <p>Explore transfer requirements, learn about the transfer process, and get in touch with us for more information.</p>
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} University Transfer Credit. All rights reserved.</p>
    </footer>
</body>
</html>
