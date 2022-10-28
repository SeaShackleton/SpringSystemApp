CREATE DATABASE IF NOT EXISTS SpringSystemApp;
CREATE USER IF NOT EXISTS 'SpringSystemUser'@'%' IDENTIFIED BY 'password';
GRANT CREATE, ALTER, DROP, INSERT, UPDATE, DELETE, SELECT, REFERENCES, RELOAD on *.* TO 'SpringSystemUser'@'%' WITH GRANT OPTION;