## NOTIFSYSTEM - Real time notifications app
### General version of each technology for this project 
__*composer*__ : *Composer version 2.5.8 2023-06-09 17:13:21*
__*node.js*__  : *v14.15.0*
__*php*__      : *PHP 8.2.18 (cli) (built: Apr 11 2024 22:07:45) (NTS)*     
__*laravel*__  : *Laravel Framework 10.48.9*

### How to install
1.- `composer create-project --prefer-dist laravel/laravel:10.48.9  notifsys`

2.- `composer require laravel/jetstream`

3.- `php artisan jetstream:install livewire`

4.- run de next commands
    `npm install` 
    `npm run build`
    `php artisan migrate`

### Solving some problems of UI jetstream: 

Afeter install laravel jetstream or solve the next error we shoult do the next: 

__*Error*__
*[vite] Internal server error: Failed to load PostCSS config #836
For those who are trying to make Tailwind work with Vite, follow below steps:*

__*Solution*__ 
*Rename postcss.config.js to postcss.config.cjs (keep tailwind.config.js as it is) 
Change the content of postcss.config.cjs as follows:*

`module.exports = ({ env }) => ({ plugins: [ require('tailwindcss')(), require('autoprefixer')() ] })`

source : https://github.com/QwikDev/qwik/issues/836

#.- Run seeders
`php artisan db:seed`

