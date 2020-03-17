# SalesDock
This is Salesdock test repository

# Features
* Can add new definitions eaily
* Can enable/disable rules defined 

# how to run this code
* clone the repo
* run "composer install"
* copy .env.example to .env and add your database details
* run "php artisan key:generate" to generate your application key
* run "php artisan migrate" to run your migration and generate database tables
* run "php artisan db:seed" to populate tables with test data
* run laravel built in server

# adding new rule definition
* Rule definitions are added to App/Services/RuleDefinitions folder
* refer existing definition files for creating new rules
* use isActive variable to enable/disable a definition
