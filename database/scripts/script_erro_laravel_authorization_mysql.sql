alter user 'root'@'localhost' identified with mysql_native_password by 'a3f24ccdb';


CREATE USER 'igor'@'localhost:3306' IDENTIFIED BY 'a3f24ccdb';
GRANT ALL PRIVILEGES ON id9788639_cuscuz.* TO 'igor'@'localhost:3306';


alter user 'id9788639_root'@'localhost' identified with mysql_native_password by 'a3f24ccdb';