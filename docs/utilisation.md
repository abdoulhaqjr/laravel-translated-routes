# Utilisation

Déclarez vos routes traduites avec :

```php
Route::transRoute('search', fn() => view('search'));
```

Laravel générera :
- `/search` (langue anglaise activée)
- `/recherche` (langue française activée)
