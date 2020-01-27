# Spigot Plugin Manager

This web app, developed in Laravel, will allow you to see all plugins installed on your server, and to check for updates.

##Installation

To install this application, clone down the repository, then copy `.env.example` to `.env`. Then, you will need to configure your database information, and run the following commands:

`composer install && npm i`
`php artisan key:generate`
`php artisan migrate:fresh`

to set up the initial database. Following that, you can just navigate to http://{your.url.here}/public, to access the application
