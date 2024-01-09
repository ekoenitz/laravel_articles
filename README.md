# About
Simple full-stack project involving serving articles from a Laravel back-end to a React front-end. Undertaken to learn how to build full-stack projects from scratch.

# Commands

## Build
Docker build:
`docker build -t laravel-articles .`

Run server:
`docker run -it -p 8000:8000 laravel-articles`

Temporary substitutions:
Build: `npm run dev` 
Run server (different window): `php artisan serve`

## Helpful
Install and use Node v16:
`nvm install 16`
`nvm use 16`

# Links

## Resources
How to integrate React into a Laravel project:
`https://adevait.com/laravel/using-laravel-with-react-js`
`https://larainfo.com/blogs/install-react-js-in-laravel-9-with-vite`

## Troubleshooting
Docker not working on wsl:
`https://github.com/docker/for-win/issues/13088#issuecomment-1536365076`