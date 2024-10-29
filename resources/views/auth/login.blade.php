<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portail de suivi</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="{{ asset('images/ctm-logo.jpg') }}" alt="CTM Logo" class="logo">
            <img src="{{ asset('images/geoportail.png') }}" alt="Geoportail Logo" class="logo">
        </div>

        <div class="map-container">
            <img src="{{ asset('images/map_image.jpg') }}" alt="Map Image" class="map-image">
            <div class="map-text">
                <p>PORTAIL DE SUIVI DE L’ACCESSIBILITÉ DES INFRASTRUCTURES SANITAIRES DE LA COMMUNE DE TOUBA MOSQUÉE</p>
            </div>
        </div>

        <div class="login-box">
            <p>Veuillez renseigner vos paramètres de connexion</p>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
                    @error('email')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="input-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" required>
                    @error('password')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit">Connexion</button>
            </form>
        </div>
    </div>
</body>
</html>
