# Blog
A simple blogging system written in the latest Laravel release, utilising the core features of laravel:
- VueJS
- Exeptions & error handling
- API

## Install Steps

1. Create DB - utf8md4
2. Rename .env.example to .env & add your configurations
3. composer install / update
4. npm install
5. php artisan key:generate
6. php artisan migrate
7. TEST DATA ONLY: run php artisan db:seed
8. LIVE DATA: import data to the local DB

## Getting Started

1. UI majority is built with VueJS and located "resources/assets/js"
2. Using SaSS pre-processor for CSS files located "resources/assets/sass"
3. Compiling Assets: "npm run watch" / "npm run dev"

## Notes:
- Ensure you have an apache server running & mysql server running, and all settings contained within the .env file are correct.
- To view all available artisan commands run: php artisan
- Trouble running npm install? ensure you have NodeJS installed "node -v"
- For further information of the stylesheet locations review the "webpack.mix.js" file in the root directory.
- For further information of the server-side packages review the "composer.json" file in the root directory.
- For further information of the client-side packages review the "packages.json" file in the root directory.

## Resources:
1. https://laravel.com
2. https://vuejs.org
3. https://github.com/capistrano/capistrano
4. https://getcomposer.org
5. https://nodejs.org
6. https://www.npmjs.com
7. https://packagist.org
8. https://bitbucket.org/product/features/pipelines
9. https://phpunit.de
10. https://cucumber.io