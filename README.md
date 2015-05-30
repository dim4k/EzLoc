EzLoc
=====


A Symfony 2 Project, Templating a basic location Website


Version
----

Current Version 0.1

Server requirements
----
* MySQL 5

Installation
----

##### Clone Github repertory

```sh
git clone https://github.com/dim4k/EzLoc.git
```

##### Configure .json files

Go in your project directory and download Composer :

```sh
curl -s https://getcomposer.org/installer | php
```

then simply run this command :

```sh
php composer.phar install
```

It will install all the components needed for this Symfony project.

Finally run the server (make sure your MySql server is runing) :

```sh
php app/console server:run
```