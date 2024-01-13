![PHP](https://img.shields.io/badge/php-8-brightgreen)
![Responsive](https://img.shields.io/badge/Responsive-Yes-ff69b4)
![Bootstrap](https://img.shields.io/badge/bootstrap-5-blue)
![Ajax](https://img.shields.io/badge/jquery-ajax-red)

# PHP ajax sweetalert2 Log in
Log in with ajax and sweetAlert2, no jquery needed. For alerts we're using SweetAlert 2.

## Backend
<p align="left">
  <a href="https://skillicons.dev">
    <img src="https://skillicons.dev/icons?i=php,mysql" />
  </a>
</p>

## Frontend
<p align="left">
  <a href="https://skillicons.dev">
    <img src="https://skillicons.dev/icons?i=javascript,bootstrap,css" />
  </a>
</p>

# Database 

```sql
    CREATE DATABASE login;

    USE `login`;

    DROP TABLE IF EXISTS `users`;

    CREATE TABLE `users` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `email` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `pass` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

    insert  into `users`(`id`,`email`,`pass`) values 
    (1,'demoz@demologin.com','@demologin');
```

## Config parameter

In <b>loginController.php</b> , you may changed the if statement for <b>password_verify()</b>, remember, function requires the first argument to be a plain text password + hashed password from DB. In this example we don't use hashed passwords and uses a simple DB for practice purposes.

```php
    password_verify($_POST["pass"], $hashed_password_from_database)
```

## Libraries included
* Bootstrap v5.3
* FontAwesome 5.15
* Sweetalert2

## Contributing

1. Fork it!
2. Create your feature branch: `git checkout -b your-branch`
3. Commit your changes: `git commit -am 'Add some feature'`
4. Push to the branch: `git push origin your-branch`
5. Submit a PR

<h3 align="left">Get in touch with me:</h3>
<p align="left">
<a href="https://www.linkedin.com/in/adhir-serrano/" target="blank"><img align="center" src="https://raw.githubusercontent.com/rahuldkjain/github-profile-readme-generator/master/src/images/icons/Social/linked-in-alt.svg" alt="adhir2099" height="30" width="40" /></a>
</p>
<p align="right" > Created with ❤️ by <a href="https://github.com/adhir2099">Adhir2099</a></p>