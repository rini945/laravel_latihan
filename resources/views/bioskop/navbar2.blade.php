<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Styling untuk navbar */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        a {
            text-decoration: none;
            color: white;
            padding: 10px 15px;
            display: inline-block;
        }

        a:hover {
            background-color: #555;
        }

        nav {
            background-color: #333;
            padding: 10px 0;
            text-align: center;
        }

        nav a {
            margin: 0 10px;
        }

        main {
            padding: 20px;
        }
    </style>
</head>
<body>
    <nav>
        <a href="/bioskop/blog_film">Home</a>
        <a href="/bioskop/file1">Menu</a>
        <a href="/bioskop/file2">List Film</a>
        <a href="/bioskop/file3">List Cinema</a>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>