# php-starter
Belajar PHP dasar dengan studi kasus login-logout.

menggunakan:
- [x] [PHP PDO](http://php.net/manual/en/book.pdo.php)
- [x] [PHP Session](http://php.net/manual/en/reserved.variables.session.php)
- [x] [bootstrap 3.3.7](https://getbootstrap.com/docs/3.3/)

## persiapan
- buat database
```text
buat database dengan nama: development
```
- buat table: users
```text
+----------+-------------+------+-----+---------+----------------+
| Field    | Type        | Null | Key | Default | Extra          |
+----------+-------------+------+-----+---------+----------------+
| id       | int(11)     | NO   | PRI | NULL    | auto_increment |
| name     | varchar(45) | YES  |     | NULL    |                |
| email    | varchar(45) | YES  | UNI | NULL    |                |
| password | varchar(45) | YES  |     | NULL    |                |
+----------+-------------+------+-----+---------+----------------+
```

## konfigurasi
```text
konfigurasi bisa dilihat pada: app/database/config.php
```

## tema bantuan
- [Form theme](https://bootsnipp.com/snippets/featured/easy-log-in-form)
- [Bootstrap 3 template](https://bootswatch.com/3/)
