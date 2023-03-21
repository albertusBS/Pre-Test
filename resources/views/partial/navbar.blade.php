<nav class="navbar navbar-expand-sm navbar-dark bg-dark" aria-label="Third navbar example">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Pre-Test</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample03">
        @auth
            <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/home">Home</a>
                </li>
            </ul>
            <form action="/logout" method="POST">
                @csrf
                <button class="btn btn-primary" type="submit">Logout</button>
            </form>
        @else
            <ul class="nav justify-end">
                <a class="nav-link" href="/login">Login</a>
            </ul>
        @endauth
        </div>
    </div>
</nav>

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
