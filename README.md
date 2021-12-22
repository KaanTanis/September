# Installation

```
composer require kaantanis/september
```

# Usage
```php
September::subject('Log title')
    ->user($user_id) // Delete this method for current user
    ->details($array) // Nullable, delete the method if you won't use it
    ->url($url) //  Delete this method for current url
    ->method($method) // Delete this method for current method (get, post etc.)
    ->ip($ip) //  Delete this method for auth user ip (if exist)
    ->userAgent($userAgent) // Delete this method for auth user user_agent (if exist)
    ->save();
```

## Usage Patterns
Only subject is required
```php
September::subject('Log title')
    ->save();

// or shortly

September::save($subject);
```
### Other fields are optional
