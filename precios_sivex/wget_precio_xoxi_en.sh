ANO=`date +%Y`
MES=`date +%m`
DIA=`date +%d`
rm -fr /var/www/clients/client0/web1/web/precios_sivex/listPrecioProducto$ANO$MES$DIA.txt
wget -P /var/www/clients/client0/web1/web/precios_sivex https://www.xperienciasxcaret.mx/taskArchivoSivex/listPrecioProducto$ANO$MES$DIA.txt
