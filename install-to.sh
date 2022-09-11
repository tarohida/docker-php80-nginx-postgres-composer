#!/bin/bash
DIR=$1
if [ ! -n "$DIR" ]; then
  echo 'ARGUMENTS ERROR: dir not set'
  exit 1
fi
if [ ! -d $DIR ]; then
  echo 'ARGUMENTS ERROR: dir not exists'
  exit 1
fi
cp -r .env .docker/ docker-compose.yml $DIR/