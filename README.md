[![PHP 7.1+](https://img.shields.io/badge/php-7.1+-ff69b4.svg)](https://packagist.org/packages/belgattitude/php_excel_dev)
[![Build Status](https://travis-ci.org/belgattitude/php_excel_dev.svg?branch=master)](https://travis-ci.org/belgattitude/php_excel_dev)
[![Total Downloads](https://poser.pugx.org/soluble/php_excel_dev/downloads.png)](https://packagist.org/packages/soluble/php_excel_dev)
[![License](https://poser.pugx.org/soluble/php_excel_dev/license.png)](https://github.com/belgattitude/php_excel_dev)

**Installation tips**, **stubs** and **checker** for [LibXL](http://www.libxl.com) / [iliaal/php_excel](https://github.com/iliaal/php_excel) php extension.   

## Stubs

Useful to enable autocompletion in your project `composer require soluble/php_excel_dev --dev`

> Stubs should be installed as a `--dev` dependency.

## LibXL install 

In order to compile the [iliaal/php_excel](https://github.com/iliaal/php_excel) you must have libXL 
installed and the php development packages installed (phpize, phpconfig).

On Ubuntu, ensure you have the `php-dev` package installed.

```sh
sudo apt-get install php-dev
```

> 
> *Alternatively suffix with the php version if you're using the ondrej/php ppa:*
>
> ```sh
> sudo apt-get install php7.3-dev
> ```
>

### Automated installation scripts

You can either use one of the bash scripts below :

| PHP  | Distribution    | Gist                                                                                                |
| ---- | --------------- |--------------------------------------------------------------------------------------------------- |
| 7.3  | Ubuntu [ondrej/php](https://launchpad.net/~ondrej/+archive/ubuntu/php) ppa  | [install_phpexcel_php73.sh](https://gist.github.com/belgattitude/7af75780e13530fd2895607079499318)  |
| 7.2  | Ubuntu [ondrej/php](https://launchpad.net/~ondrej/+archive/ubuntu/php) ppa  | [install_phpexcel_php72.sh](https://gist.github.com/belgattitude/69d3245227d4cc284996e3f0a1bc0033)  |
| 7.1  | Ubuntu [ondrej/php](https://launchpad.net/~ondrej/+archive/ubuntu/php) ppa  | [install_phpexcel_php71.sh](https://gist.github.com/belgattitude/999aee8eb6bd73fd0a7367ad896c76c3)  |
| 7.x  | For Travis CI | [travis-install-libxl.sh](.travis/travis-install-libxl.sh) |


> Be sure the extension is loaded (in your php.ini) or type `phpenmod excel`.

### Manual installation 
 
#### LibXL

The [libxl](http://www.libxl.com) static binaries can easily be installed:

```sh
sudo mkdir /opt/libxl-3.8.2;
wget -qO- http://www.libxl.com/download/libxl-lin-3.8.2.tar.gz | sudo tar zxvf - --strip 1 --directory /opt/libxl-3.8.2
```

#### PHP extension

Download and unzip the [php_excel/php7](https://github.com/iliaal/php_excel/tree/php7) branch:

```sh
wget -qO- https://github.com/iliaal/php_excel/archive/php7.tar.gz | tar zxvf - --directory /tmp
``` 

Build the extension;

```sh
cd /tmp/php_excel-php7; 
./configure --with-php-config=`which php-config` \
            --with-libxl-incdir=/opt/libxl-3.8.2/include_c/ \
            --with-libxl-libdir=/opt/libxl-3.8.2/lib64/ \
            --with-excel=/opt/libxl-3.8.2 && \
make && \
make install
```

> In case you're using multiple php versions, you can generally suffix 
> the phpize and phpconfig commands like `phpize-7.3`, `php-config-7.3`...

Then register the extension in your php.ini:

```ini
extension=excel.so
```

> For ondrej/php ppa 
>
> ```sh
> echo "extension=excel.so" > /tmp/excel.ini;
> sudo cp /tmp/excel.ini /etc/php/php7.3/mods-available/excel.ini; 
> sudo phpenmod -v 7.3 excel;
>```
>

## Checks

A convenience script to check installation can be run from composer

```bash
$ composer check:libxl -- <license name> <license key>
```

or directly from php
 
```bash
$ ./bin/heck_phpexcel_install.sh <license name> <license key> 
```

It checks for correctly loaded extension and valid license. 

## Versions

| Version  | LibXL   | php_excel                                                      | Note(s)                                  |
| -------- | ------- | -------------------------------------------------------------- | ---------------------------------------- |
| 0.1.x    | 3.8.2   | [php7-branch](https://github.com/iliaal/php_excel/tree/php7)   | &gt; 3.8.2 seems to have license problem |
