## About Siga

TBD

## Setup

Sigaa backend uses [Laravel](https://laravel.com/) in case you're familiar with the framework, below you can find an in depth step by step guide to setup the application.

### Prerequisites
- Docker - [docs](https://docs.docker.com/get-docker/)
- Docker-compose - [docs](https://docs.docker.com/compose/)
- Composer - [docs](https://getcomposer.org/)
- WSL (if you're on Windows) - [docs](https://docs.microsoft.com/pt-br/windows/wsl/install-win10)

### Project dependencies
To download the necessary dependencies use `composer install`, this will download all the libs used in this project, including [sail]((https://laravel.com/docs/8.x/sail#introduction)) which is the main tool used to manage the application.

### Environments variables
You will need to setup your development environments, create a file `.env` on the project root structure, you can use the file [.env.example](.env.example) as an example.

### Sail up
This project uses Laravel, which uses [sail](https://laravel.com/docs/8.x/sail#introduction) to manage the service containers, you can run `vendor/bin/sail up` to setup the containers. Mind that sail will use the database values on you `.env` file to setup the database.

### Migrations
You can create the database schemas and seed it using: `vendor/bin/sail artisan migrate --seed`.

## Security Issues

TBD

## Code structure

TBD
