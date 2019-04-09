
[![PHP 7.1+](https://img.shields.io/badge/php-7.1+-ff69b4.svg)](https://packagist.org/packages/belgattitude/php_excel_dev)
[![Build Status](https://travis-ci.org/belgattitude/php_excel_dev.svg?branch=master)](https://travis-ci.org/belgattitude/php_excel_dev)

# LibXL php

php_excel_dev provides to work with [LibXL](http://www.libxl.com) and [ilia/php_excel](https://github.com/iliaal/php_excel)   

- [x] LibXL stubs to enable autocompletion.
- [x] LibXL/php_excel installation instructions for linux/debian derivatives.
- [x] Travis [example](.travis/travis-install-libxl.sh) installation script.

# Stubs

```
$ composer require soluble/php_excel_dev --dev
```

> Stubs should be installed as a `--dev` dependency. The following table display
> versions tested on travis for PHP version 7.1, 7.2 and 7.3.

| Version  | LibXL   | LibXL                                                          | Note(s)                                  |
| -------- | ------- | -------------------------------------------------------------- | ---------------------------------------- |
| 0.1      | 3.8.2   | [php7-branch](https://github.com/iliaal/php_excel/tree/php7)   | &gt; 3.8.2 seems to have license problem |



# Install

## LibXL

The [libxl](http://www.libxl.com) static binaries can easily be installed:

```bash
sudo mkdir /opt/libxl-3.8.2;
wget -qO- http://www.libxl.com/download/libxl-lin-3.8.2.tar.gz | sudo tar zxvf - --strip 1 --directory /opt/libxl-3.8.2
```


## PHP extension

[ilia/php_excel](https://github.com/iliaal/php_excel) must be compiled and installed in your php.ini:

> Please be sure to have
> ```bash 
> sudo apt
> ```


