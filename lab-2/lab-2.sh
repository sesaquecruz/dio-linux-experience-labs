#!/bin/bash

echo "Atualizando servidor..."

apt-get update
apt-get upgrade -y
apt-get install apache2 unzip wget -y

echo "Baixando arquivos..."

cd /tmp
wget https://github.com/denilsonbonatti/linux-site-dio/archive/refs/heads/main.zip

echo "Descompactando arquivos..."

unzip main.zip
cd linux-site-dio-main/

echo "Copiando arquivos..."

cp -R * /var/www/html/

echo "Finalizado..."
