#!/bin/bash
#
# Example script to install LibXL, ilia/php_excel on PHP 7.3
#
# @author Vanvelthem Sébastien
# @homepage https://github.com/belgattitude
#

BASE_DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"


## SET the versions here (for PHP_VERSION, do not add 'patch' number)
PHP_VERSION=
# > 3.8.2 requires the use of jan-e fork, see below
LIBXL_VERSION=3.8.2
DOWNLOAD_DIR="${BASE_DIR}/downloads"
EXT_DIR="${BASE_DIR}/ext"
LIBXL_INSTALL_PATH="${EXT_DIR}/libxl-$LIBXL_VERSION"

set -e

# (SHOULD NOT BE EDITED)
LIBXL_ARCHIVE_VERSION=$LIBXL_VERSION.0
LIBXL_URL="http://www.libxl.com/download"
LIBXL_ARCHIVE="libxl-lin-$LIBXL_VERSION.tar.gz"

# (SHOULD NOT BE EDITED)
PHP_CONFIG=`which php-config$PHP_VERSION`
PHPIZE=`which phpize$PHP_VERSION`

# (SHOULD NO BE EDITED)
# Release 1.0.2 contains a bug regarding license
# see https://github.com/iliaal/php_excel/issues/163
# So we use the master branch
PHP_EXCEL_URL=https://github.com/iliaal/php_excel/archive/php7.zip
PHP_EXCEL_ARCHIVE_DIR=php_excel-php7

# THIS FORK CONTAINS UPDATED VERSION
#PHP_EXCEL_URL=https://github.com/Jan-E/php_excel/archive/php7_with_pulls.zip
#PHP_EXCEL_ARCHIVE_DIR=php_excel-php7_with_pulls

install_libxl() {
    echo "Download and install LIBXL v$LIBXL_VERSION"
    wget -O $DOWNLOAD_DIR/$LIBXL_ARCHIVE $LIBXL_URL/$LIBXL_ARCHIVE
    tar zxvf $DOWNLOAD_DIR/$LIBXL_ARCHIVE --directory $DOWNLOAD_DIR
    mkdir -p $LIBXL_INSTALL_PATH
    cp -r $DOWNLOAD_DIR/libxl-$LIBXL_ARCHIVE_VERSION/* $LIBXL_INSTALL_PATH
}

compile_phpexcel_extension() {
    echo "Download, configure and compile ilia/phpexcel extension"
    echo " -> downloading"
    wget -O $DOWNLOAD_DIR/php_excel.zip $PHP_EXCEL_URL
    if [ -d $DOWNLOAD_DIR/$PHP_EXCEL_ARCHIVE_DIR ]; then
	# REMOVE previous build if exists
	rm -r $DOWNLOAD_DIR/$PHP_EXCEL_ARCHIVE_DIR/*
    fi
    unzip -o $DOWNLOAD_DIR/php_excel.zip -d $DOWNLOAD_DIR
    cd $DOWNLOAD_DIR/$PHP_EXCEL_ARCHIVE_DIR/
    echo " -> configuring"
    eval "$PHPIZE"
    ./configure --with-php-config=$PHP_CONFIG --with-libxl-incdir=$LIBXL_INSTALL_PATH/include_c/ --with-libxl-libdir=$LIBXL_INSTALL_PATH/lib64/ --with-excel=$LIBXL_INSTALL_PATH
    echo " -> compiling"
    make
    cp modules/excel.so "${EXT_DIR}/excel.so"
    echo "Compilatation successful"
}

install_libxl;
compile_phpexcel_extension;

echo "extension=${EXT_DIR}/excel.so" >> ~/.phpenv/versions/$(phpenv version-name)/etc/php.ini

