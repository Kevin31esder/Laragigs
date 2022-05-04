Uso


Configuracionde la base de datos
Usamos Mysql en este caso. Para usar algo diferente abrir  config/Database.php y cambia los valores .

Para usar Mysql, ten seguro de tenerlo instalado, configure la base de datos y luego agregue sus credenciales a la  base de datos (base de datos, nombre de usuario y contraseña) al archivo .env.example y cambie el nombre a .env

Migrations

Para crear todas las tablas y columnas necesarias, ejecute lo siguiente

php artisan migrate


Seeding The Database
Para agregar los listados ficticios con un solo usuario, ejecute lo siguiente

php artisan db:seed


File Uploading
cuando subas archivos , ellos van a "storage/app/public". Cree un enlace simbólico con el siguiente comando para hacerlos accesibles públicamente.

php artisan storage:link


Running Then App
Sube tus documentos al root

php artisan serve


