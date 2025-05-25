# Middleware

Le middleware `SetLocaleFromPath` détecte automatiquement la langue selon :

1. L’URL accédée (`/recherche`)
2. La session (`session('locale')`)
3. L'utilisateur connecté (`Auth::user()->locale`)
4. La valeur par défaut de l'application
