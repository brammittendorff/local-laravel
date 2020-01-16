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

Download laravel files and move them to folder `application/public/`.

#### Download database dump

Download the database dump, you can export it from phpmyadmin for example. And move it to folder: `db_dump`.



## Installation of laravel site

#### Run the instance

Move to the folder where you unzipped this package. And run:

```
docker-compose up --build
```

Navigate in the browser to http://localhost:8001. Click on the database in the left menu called laravel. Then go to the menu item import at the top. Then select the database dump in the folder `db_dump`. Please wait until it is has finished because this may take a while.

#### Set mysql server ip to wp-config.php:

Run the following command to get the ip of the mysql server:

```
docker inspect -f '{{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}'  $(docker ps | grep mysql | awk '{print $1}')
```

This will result in for example: `172.27.0.2`

Go to file `application/public/wp-config.php` and set `define('DB_HOST', '172.27.0.2');` to this ip.
