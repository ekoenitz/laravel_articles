# About
Simple full-stack project involving serving articles from a Laravel back-end to a React front-end. Undertaken to learn how to build full-stack projects from scratch.

# Commands

## Setup
Install sail (select mysql, phpmyadmin, and redis when prompted)
`composer require laravel/sail --dev`
`php artisan sail:install`

Alias sail:
Copy `alias sail='bash vendor/bin/sail'` to ~/.bashrc

Install dependencies (may not be necessary):
`sail up -d`
`sail composer require laravel/breeze --dev`
`sail artisan breeze:install react`

## Run
Start container:
`sail up -d`

Stop container (when you change .env and docker configurations):
`sail stop`
Sometimes you'll need to run this version of the command and change DB_HOST to mysql in the .env file instead:
`sail stop -v`

Run server:
`sail npm run dev`
(separate window)
`sail artisan serve`
Then navigate to http://127.0.0.1/ (the output says port 8000 but just ignore that)

## Helpful
Install and use Node v16:
`nvm install 16`
`nvm use 16`

# Links

## Resources
How to integrate React into a Laravel project:
`https://github.com/aasoru/laravel-inertia-react-sail/blob/main/README.md`
`https://qiita.com/Sho-taro/items/820e4117c5b5f4c6717f`

How to add phpmyadmin:
`https://ecwebservices.medium.com/adding-phpmyadmin-to-laravel-sail-64823687e084`

## Troubleshooting
Docker not working on wsl:
`https://github.com/docker/for-win/issues/13088#issuecomment-1536365076`