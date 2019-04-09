
[![PHP 7.1+](https://img.shields.io/badge/php-7.1+-ff69b4.svg)](https://packagist.org/packages/belgattitude/php_excel_dev)
[![Build Status](https://travis-ci.org/belgattitude/php_excel_dev.svg?branch=master)](https://travis-ci.org/belgattitude/php_excel_dev)

# LibXL php


- [x] LibXL stubs to enable autocompletion.
- [x] Travis [example](.travis/travis-install-libxl.sh) installation script.
- [x] LibXL/php_excel installation instructions.

# Installation

> Stubs are 

```
$ composer require soluble/php_excel_dev --dev
```

## LibXL

## Ubuntu/Debian

To fullfill installation on ubuntu/debian derivatives ensure
that the following packages are installed:

```bash
sudo apt install tar 
``` 

## LibXL

The [libxl](http://www.libxl.com) library can be installed:

```bash
sudo mkdir /opt/libxl-3.8.2;
wget -qO- http://www.libxl.com/download/libxl-lin-3.8.2.tar.gz | sudo tar zxvf - --strip 1 --directory /opt/libxl-3.8.2
```


## PHP extension

### PHP 7.1

### PHP 7.2

### PHP 7.3
