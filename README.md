# CRUD
Crud modular simples em **PHP/MySQL** para uso geral e aprendizagem.
Inclui um módulo simples de controle de login.

Database
```sql
CREATE DATABASE `crud_data` /*!40100 DEFAULT CHARACTER SET utf8 */;
```
Tabela usuários
```sql
CREATE TABLE `usuarios` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `nome` varchar(45) NOT NULL,
        `email` varchar(45) NOT NULL,
        `senha` varchar(100) DEFAULT NULL,
        PRIMARY KEY (`id`)
      ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
```
