# Install
- 1，download drupal 10.5.8 at https://ftp.drupal.org/files/projects/drupal-10.5.8.zip, unzip it to directory for example "drupaltest"
- 2, copy the content of itctest from our code to "drupaltest" and override it.
- 3, run "composer install"  at "drupaltest" directory
- 4,create a database "itctest" and import the data from itctest-2025-12-11-3.sql
- 5,change the databases settings at sites\default\settings.php, set the correct username and password

## site account:
- username:admin
- password:admin

> Notice, the code is in a sub directory "itctest" when I build it, Please clear the cache after you login.
