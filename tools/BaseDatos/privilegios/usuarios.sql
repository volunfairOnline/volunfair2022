
# ------------------ Sustituciones -----------------------------------------------
#
# Buscar todas las apariciones del nombre de
# 	* La base de datos y sustituirla por el nombre de la base de datos nueva
#	* Los nombres de usuario (PequeLiante y GranLiante)
#
# Este sustituci�n debe hacerse tambien en los ficheros
#	* Creacion de la base de datos
#	* Clase de php que maneja la base de datos (../../web/mysql/MySqlHandler.Class.php)
#
# --------------------------------------------------------------------------------


# --- Seleccionar la base de datos de administraci�n
USE mysql;

# --- Crear el usuario alumnos accesible desde cualquier lado
DELETE FROM user WHERE user ='PequeLiante';
INSERT INTO user SET host='%', user ='PequeLiante', authentication_string=PASSWORD('H@y59ONGs'), ssl_cipher='ANY', x509_issuer='N', x509_subject='N';

DELETE FROM db WHERE Db='LaLiamos'AND User='PequeLiante';
INSERT INTO db SET Host='%', Db='LaLiamos', User='PequeLiante', Select_priv='Y';

# --- Actualizaci�n necesaria de lo anterior NO OLVIDAR antes del grant
FLUSH PRIVILEGES;

# -----------------------------------
GRANT SELECT,INSERT,UPDATE,DELETE ON LaLiamos.* TO 'GranLiante' IDENTIFIED BY 'S4l4d3l4M4k1nA';
GRANT SELECT ON LaLiamos.* TO 'PequeLiante' IDENTIFIED BY 'H@y59ONGs';

#---Importante, NO OLVIDAR
Flush privileges;

GRANT SELECT, INSERT, UPDATE, DELETE ON LaLiamos.ongs TO PequeLiante;
GRANT SELECT, INSERT, UPDATE, DELETE ON LaLiamos.voluntariado_proyecto TO PequeLiante;
GRANT SELECT, INSERT, UPDATE, DELETE ON LaLiamos.voluntariado_lugar TO PequeLiante;
GRANT SELECT, INSERT, UPDATE, DELETE ON LaLiamos.imagen TO PequeLiante;
GRANT SELECT, INSERT, UPDATE, DELETE ON LaLiamos.rifa TO PequeLiante;
GRANT SELECT, INSERT, UPDATE, DELETE ON LaLiamos.sorteorifa TO PequeLiante;

# -----------------------------------



# -----------------------------------

# --- Actualizaci�n necesaria de lo anterior NO OLVIDAR
FLUSH PRIVILEGES;