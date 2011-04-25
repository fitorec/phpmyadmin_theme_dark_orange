#!/bin/bash

if [ `id -g` -ne 0 ]
then
  echo "Usage:  ./$0 root group"
  exit 1
fi

echo "Instalando nuevo tema en mi phpmyadmin"

if [ -d  "/usr/share/phpmyadmin/themes/" ]
then
	echo 'copiando tema en la carpeta /usr/share/phpmyadmin/themes/'
	rm -fr /usr/share/phpmyadmin/themes/fitoDarkOrange
	cp -r ./themes/fitoDarkOrange/ /usr/share/phpmyadmin/themes/
fi

if [ -d  "/opt/lampp/phpmyadmin/themes/" ]
then
	echo 'copiando tema en la carpeta /opt/lampp/phpmyadmin/themes/'
	rm -fr /opt/lampp/phpmyadmin/themes/fitoDarkOrange
	cp -r ./themes/fitoDarkOrange/ /opt/lampp/phpmyadmin/themes/
fi
