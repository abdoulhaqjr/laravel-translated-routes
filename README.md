# 🌐 Laravel Translated Routes

Traduisez automatiquement les URLs de vos routes Laravel selon la langue de l’utilisateur, **sans avoir à inclure de préfixe de langue dans l’URL**.

![Logo](assets/logo.png)
![Bannière](assets/banner.png)

![Packagist Version](https://img.shields.io/packagist/v/abdoulhaqjr/laravel-translated-routes)
![Packagist Downloads](https://img.shields.io/packagist/dt/abdoulhaqjr/laravel-translated-routes)

---

## 🚀 Fonctionnalités

- Traduction dynamique des URLs (`/search` → `/recherche`)
- Détection automatique de la langue selon l’URL accédée
- Fallback configurable : session, utilisateur connecté, config Laravel
- Middleware inclus
- Facile à intégrer avec une syntaxe propre (`Route::transRoute(...)`)

---

## 🧱 Installation

```bash
composer require abdoulhaqjr/laravel-translated-routes
php artisan vendor:publish --tag=translated-routes-config
```

---

## 🔧 Configuration

```php
return [
    'supported_locales' => ['en', 'fr'],
    'user_locale_attribute' => 'locale',
    'session_key' => 'locale',
    'routes' => [
        'search' => ['en' => 'search', 'fr' => 'recherche'],
        'contact' => ['en' => 'contact', 'fr' => 'contactez-nous'],
    ],
];
```

---

## 📌 Utilisation

```php
Route::transRoute('search', fn() => view('search'));
```

Résultat :
- `/search` → active la langue `en`
- `/recherche` → active la langue `fr`

> ✅ Aucun `/en/...` ou `/fr/...` nécessaire dans l’URL.

---

## 🧪 Tests

Compatible avec PestPHP.

```bash
./vendor/bin/pest
```

---

## 📄 Licence

MIT © abdoulhaqjr

---

# 🌐 Laravel Translated Routes

Automatically translate Laravel route URLs based on user language, **without using `/en` or `/fr` in the URL**.

---

## 🚀 Features

- Clean translated URLs (`/search` → `/recherche`)
- Automatic locale detection based on accessed path
- Fallback supported: session, authenticated user, or default config
- Built-in middleware for auto-detection
- Simple syntax with `Route::transRoute(...)`

---

## 🧱 Installation

```bash
composer require abdoulhaqjr/laravel-translated-routes
php artisan vendor:publish --tag=translated-routes-config
```

---

## 🔧 Configuration

```php
return [
    'supported_locales' => ['en', 'fr'],
    'user_locale_attribute' => 'locale',
    'session_key' => 'locale',
    'routes' => [
        'search' => ['en' => 'search', 'fr' => 'recherche'],
        'contact' => ['en' => 'contact', 'fr' => 'contactez-nous'],
    ],
];
```

---

## 📌 Usage

```php
Route::transRoute('search', fn() => view('search'));
```

Output:
- `/search` → sets locale to `en`
- `/recherche` → sets locale to `fr`

> ✅ No `/en/...` or `/fr/...` prefix required in the URL.

---

## 🧪 Testing

Compatible with PestPHP.

```bash
./vendor/bin/pest
```

---

## 📄 License

MIT © abdoulhaqjr
