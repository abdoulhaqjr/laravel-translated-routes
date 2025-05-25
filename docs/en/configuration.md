# Configuration

In `config/translated-routes.php`:

```php
return [
    'supported_locales' => ['en', 'fr'],
    'user_locale_attribute' => 'locale',
    'session_key' => 'locale',
    'routes' => [
        'search' => ['en' => 'search', 'fr' => 'recherche'],
    ],
];
```
