<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Tweeter - Laravel</title>
    <style>
        body {
            background-color: #f8f9fa;
        }

        h1,
        h5 {
            color: #343a40;
        }

        .card {
            border: none;
        }

        .container {
            max-width: 600px;
        }

        .profile-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }

        .logout-btn {
            position: absolute;
            top: 15px;
            right: 15px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    @include('inc.navbar')

    <div class="container mt-5">
        <h1 class="text-center">Tweetier</h1>

        <!-- Bagian Profil -->
        @yield('content')

        <!-- Bagian Posting -->

            <!-- Postingan User -->

            <!-- End Example Post -->
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
