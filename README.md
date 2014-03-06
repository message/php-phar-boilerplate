PHAR Boilerplate
===

This boilerplate helps you to create [PHAR](https://php.net/phar) archives from you [CLI](http://en.wikipedia.org/wiki/Command-line_interface) commands. Same as [JAR](http://en.wikipedia.org/wiki/Java_archive) in Java.

##Installation

Install [Box](http://box-project.org/).

```sh
$ curl -LSs http://box-project.org/installer.php | php
$ chmod +x box.phar 
$ mv box.phar /usr/local/bin/box
```

Install [Composer](https://getcomposer.org/)


```sh
$ curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
$ chmod +x /usr/local/bin/composer
```

Fetch dependencies

```sh
$ composer install
```

## Development
`src/Application/Command` path is automatically scanned for commands. Name convention `*Command.php`. To learn more about commands see [manual](http://symfony.com/doc/2.4/components/console/index.html).

## Testing
There is no reason to build your application each time, so run `bin/boilerplate` command, and you will get same result.
```sh
$ php bin/boilerplate
```
or mark file as executable with `chmod +x bin/boilerplate` and run 
```sh
$ ./bin/boilerplate
```

## Build

```sh
$ box build
```

## Run 

```sh
$ php boilerplate.phar
```

or mark file as executable with `chmod +x boilerplate.phar` and run 

```sh
$ ./boilerplate.phar
```
