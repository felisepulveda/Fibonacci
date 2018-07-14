
-----Servidor web en local que comprueba valores de la sucesion de fibonacci en ubuntu 14.04

Instalacion herramientas para funcionamiento de servidor web
1)Se debe instalar el servidor HTTP Apache con las siguientes comandos:
sudo apt-get install apache2
Para verificar los diferentes estados del servidor Apache usamos:
sudo /etc/init.d/apache2 start
sudo /etc/init.d/apache2 restart
sudo /etc/init.d/apache2 stop
sudo /etc/init.d/apache2 status
2) Se debe instalar php7.1 con los siguientes comandos:
sudo add-apt-repository ppa:ondrej/php
sudo apt-get update
sudo apt-get install php7.1
3) Se debe instalar phpunit7.2.6 con los siguientes comandos:
wget https://phar.phpunit.de/phpunit.phar
chmod +x phpunit.phar
sudo mv phpunit.phar /usr/local/bin/phpunit

Ejecucion del codigo
1) Se debe descargar el repositorio en la carpeta /var/www/html utilizando: git clone 'https://github.com/felisepulveda/Fibonacci.git'
2) Se escribe localhost en nuestro navegador y ya tenemos nuestro servidor web en local funcionando.
3) Ahora solo debemos poner cualquier numero natural y el navegador respondera con los terminos n y n-1 de la sucesion de fibonacci. Las entradas estan filtradas, por tanto si escribimos cualquier otra cosa que no sea un numero natural, nos saldra un mensaje, diciendo 'Debe ingresar un numero natural'.
4) Para realizar pruebas unitarias sobre el servidor se utilizan los siguientes comandos: phpunit TestU.php
5) El script TestU.php se puede modificar para agregar mas valores al test unitario. Lo que hace el script es verificar un conjunto de entradas y salidas para la funcion de fibonnaci en el script procesado.php. Si el script procesado.php es modificado y ya no entrega las mismas salidas, nuestro test unitario deberia notarlo y mostrarnos que existe un error en las pruebas. De lo contrario, despues de los cambios, el script procesado.php seguira funcionando con normalidad, y las pruebas unitarias seran satisfactorias.

