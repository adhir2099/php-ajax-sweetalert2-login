![PHP](https://img.shields.io/badge/php-8-brightgreen)
![Responsive](https://img.shields.io/badge/Responsive-Yes-ff69b4)
![Bootstrap](https://img.shields.io/badge/bootstrap-4.5-blue)
![Jquery](https://img.shields.io/badge/jquery-3.5.1-orange)
![Ajax](https://img.shields.io/badge/jquery-ajax-red)
# PHP ajax sweetalert2 Log in
Log in with ajax and sweetalert2.

# Database 
* sweetLogin.sql

There is the schema for the table.

<code>
    CREATE DATABASE sweetLogin;

    USE `sweetLogin`;

    DROP TABLE IF EXISTS `users`;

    CREATE TABLE `users` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `email` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `pass` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

    insert  into `users`(`id`,`email`,`pass`) values 
    (1,'demoz@demologin.com','@demologin');
</code>

## Libraries included
* Bootstrap v4
* FontAwesome 5.15
* Jquery v3.5.1
* Sweetalert2

## Contributing

1. Fork it!
2. Create your feature branch: `git checkout -b your-branch`
3. Commit your changes: `git commit -am 'Add some feature'`
4. Push to the branch: `git push origin your-branch`
5. Submit a PR

## Creator
* <a href="https://github.com/adhirsaurio">Yomerengues</a>

## Maintenance
![Maintenance](https://img.shields.io/badge/Maintenance-Yes-brightgreen)