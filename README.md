<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

### How to use

- Clone the repository with __git clone__
- Copy __.env.example__ file to __.env__ and edit database credentials there
- Run __composer install__
- Run __php artisan key:generate__
- Run __php artisan migrate__
- Run __php artisan db:seed --class=AppSeeder__ 
- That's it
- I didn't add middleware, you can access the panel with the url '/admin'
---

### Description

An example project for an enterprise, 
in this case, a tattoo studio , includes
responsive website with a set of several standard subpages.
with the option of sending an order to the service.

In the Administrator panel is available options:
Website content management, adding/editing/deleting and previewing new content blocks.
Ability to generate general reports or reports for a given employee from a selected period.
Accessory status management option, automatically updated when confirming your visit

Managing requests from clients, assigning appointments to employees for clients.
Preview a list or schedule in the form of a calendar for future work.
Issues related to the work of the studio employee management, view information on the amount, work done, the amount earned or working time.
Similarly with clients, tatooss.
Possibility to register visits, view information.
