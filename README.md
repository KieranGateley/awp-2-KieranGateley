# Spigot Plugin Manager

This web app, developed in Laravel, will allow you to see all plugins installed on your server, and to check for updates.

##Installation

To install this application, clone down the repository, then copy `.env.example` to `.env`. 
Then, you will need to configure your database information, and run the following command:

`composer install && npm i && php artisan key:generate && php artisan migrate:fresh`<br>

to set up the initial database. Following that, you can just navigate to `http://{your.url.here}/public`, to access the application.

## Integration with Minecraft Servers

To allow this app to get information about your Minecraft server, you will need to download the latest plugin release from 
https://github.com/CelesteMagisteel/SpigotPluginManager and install it onto your server.

## Checking for Updates

Unfortunately at this time, it is nigh on impossible to accurately find the spigot ID for a plugin, so these would have to be entered manually. 
This can often be found in the spigot url `https://www.spigotmc.org/resources/{plugin}.{id}/`. 
Plugins with spigot links as their website will be automatically updated, however, others will have to be input manually.
