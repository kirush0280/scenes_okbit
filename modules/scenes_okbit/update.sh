#!/bin/bash
NOW=$(date +"%m-%d-%Y_%H%M")
mkdir /var/www/tmp
mkdir /var/www/tmp/backup
mkdir /var/www/tmp/backup/$NOW

cd /var/www/tmp
git clone https://github.com/kirush0280/scenes_okbit.git

cp -R /var/www/modules/scenes_okbit/ /var/www/tmp/backup/$NOW/modules/
cp -R /var/www/templates/scenes_okbit/ /var/www/tmp/backup/$NOW/templates/

cp -R /var/www/tmp/scenes_okbit/modules /var/www/modules/
cp -R /var/www/tmp/scenes_okbit/templates /var/www/templates/

rm -R /var/www/tmp/scenes_okbit
