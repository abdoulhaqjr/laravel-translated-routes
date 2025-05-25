# Middleware

The `SetLocaleFromPath` middleware automatically detects the language from:

1. Accessed path (`/recherche`)
2. Session (`session('locale')`)
3. Authenticated user (`Auth::user()->locale`)
4. App default (`config('app.locale')`)
