# Usage

Declare your multilingual routes with:

```php
Route::transRoute('search', fn() => view('search'));
```

This will create:
- `/search` (activates English)
- `/recherche` (activates French)
