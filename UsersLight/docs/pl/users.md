Tworzenie/Dodawanie/Usuwanie/Edytowanie użytkowniak

Użytkowników możemy dodawać w pliku **modules/Users/src/Config/users.php**

```php
<?php

return [
    'users' => [
        [
            'id' => 1,
            'username' => 'aadmin',
            'password' => md5('CHANGME_WITHOUT_MD5()')
        ]
    ]
];

```
**id** - UnikalneId każdy nastepny użytkownik musi mieć +1
**username** - Nazwa użytkownika Pole teksowe
**password** - hasło zakodowanie jest zakodowanie w MD5() 