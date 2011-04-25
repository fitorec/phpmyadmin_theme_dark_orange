fitoDarkOrange
==========================================================================================

##phpmyadmin theme dark orange


Es un tema para el administrador [**phpmyadmin**](http://www.phpmyadmin.net/home_page/themes.php) basado en el tema de [@mikehomme](https://twitter.com/mikehomme).

##Caracteristicas principales

 - Colores: negro, anaranjado y azul.
 - CSS3, webkit, moz
 - **No Javascript**
 
##Ventajas
 - Mejora la usabilidad
  - Resalta los `divs`,`inputs`,`buttons` al posicionar el `focus` 
 - Se mejoro los [iconografia](http://www.famfamfam.com/lab/icons/silk/)
 
##Como instalar en linux.

	#Clone el proyecto con el **git** o descargar desde la web y descomprime
	# ejecutar como administrador (`root`) el archivo install.sh
	$ cd ./phpmyadmin_theme_dark_orange/
	$ sudo ./install.sh

**Nota:** para instalación manual basta con copiar la estructura de directorios de `themes/fitoDarkOrange/` la carpeta de nuestro _phpmyadmin_ tipocamente los directorios  son:

 - **En Linux**
  - /usr/share/phpmyadmin/themes/
  - /opt/lampp/phpmyadmin/themes/
 - **En Windows**
  - c:\[path to xampp]\phpmyadmin\themes\
  - c:\[path to apache2]\public_html\phpmyadmin\themes\

##Estructura de directorios
	themes/fitoDarkOrange/
						 |-- css
						 |   |-- theme_left.css.php
						 |   |-- theme_print.css.php
						 |   `-- theme_right.css.php
						 |-- img
						 |   |-- arrow_ltr.png
						 |   |--....
						 |   `-- window-new.png
						 |-- info.inc.php
						 |-- layout.inc.php
						 `-- screen.png

##Plus

Se recomienda cambiar la configuracion de nuestro archivo `phpmyadmin/config.inc.php` cambiando y declarando las siguientes variables:

		#Esta cadena de configuración se debe de cambiar por seguridad
		$cfg['blowfish_secret'] = 'gfy7e7nanpbbpxz'; //cadena hash ocupada para la autenticar cookies
		#ponemos el tema fitoDarkOrange por defecto
		$cfg['ThemeDefault'] = 'fitoDarkOrange';
		$cfg['ThemePath']	= './themes';
		$cfg['ThemeManager']	= TRUE;

Una forma de optener cadenas areatorias desde linea de comandos el linux es:

	#cadena areatoria de 15 caracteres
	echo `</dev/urandom tr -dc a-z0-9 | head -c 15`
