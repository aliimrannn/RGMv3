<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Research Grant Management System (RGMv3)</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8i7nD4L5rT2zZRXbJDF4S7W3dbN6w9I4GpGq5rP9Yg5J76zLgG5czV9F6h7" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ url('/') }}">RGMv3</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('research-grants.index') }}">Research Grants</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('academicians.index') }}">Academicians</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('milestones.index') }}">Milestones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('members.index') }}">Members</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Main content -->
        @yield('content')
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gyb6K2z9txfiZ2zS5fE+zdpD5syaJw7GJrDg2X+1PVcJv7+n3o" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0m3zX1kW7c2+Xc+6rXxg3bmb7CkpXhZt3L1/abK0k+2k9l5f" crossorigin="anonymous"></script>
</body>
</html>
