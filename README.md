# Installation

## Prerequisites

#### Install docker-ce

Install docker-ce for mac from:

https://hub.docker.com/editions/community/docker-ce-desktop-mac

#### Install docker-compose

Install docker compose from:

https://docs.docker.com/compose/install/

## Setup files

#### Download the laravel files

Download laravel files and move them to folder `application/`. Or create a new laravel project like so:

```
composer create-project --prefer-dist laravel/laravel application
```

## Installation of laravel site

#### Run the instance

Move to the folder where you unzipped this package. And run:

```
docker-compose up --build
```

#### Run composer inside container

```
docker run local-docker-laravel composer
```

#### Get the database host ip:

```
docker inspect -f '{{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}'  $(docker ps | grep mysql | awk '{print $1}')
```

This will result in for example: `172.27.0.2`

