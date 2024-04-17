# Intro
* Laravel Versi 10
* Minimal PHP Versi 8.1
* versi NPM bebas

# Tutorial
## 1. Cek versi php
    * Check Versi PHP jika lebih dari 8.1 maka biarkan jika 

    Jika versi php versi 8.0 pakai ini:
    "composer create-project laravel/laravel:^9.0 [nama project]"

    Jika versi php dibawah 8.0 pakai ini:
    "composer create-project laravel/laravel:^8.0 [nama project]"

    jika versi sama seperti template maka tinggal melakukan:
    "composer install"
## 2. Install laravel ui
    1. "composer require laravel/ui"
    2. "php artisan ui bootstrap --auth"
    3. "npm install && npm run dev"

## 3. Pakai asset yang sudah saya siap kan rawr
    ini berguna jika versi php >= 8.1 / laravel 10 
    "php artisan migrate::fresh --seed"

## 4. tips and trick
    ada di tutorial.js & bissmillah Rawr