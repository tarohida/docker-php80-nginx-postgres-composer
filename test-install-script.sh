#!/bin/bash
# This is script to test install-to.sh

DIR_NOT_EXISTS='/not_exists/'
TMP_DIR='./test-install'

./install-to.sh
./install-to.sh $DIR_NOT_EXISTS
mkdir $TMP_DIR
./install-to.sh $TMP_DIR
ls -al $TMP_DIR
rm -rf $TMP_DIR