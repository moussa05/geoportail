<!DOCTYPE html>
<html>
<head>
    <title>Index Page</title>
</head>
<body>
    <div style="position: absolute; top: 10px; left: 10px;">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Se déconnecter</button>
        </form>
    </div>

    <h1>Bienvenue sur la page index</h1>
</body>
</html>
