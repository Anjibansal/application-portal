# Preparing the Database

Do the following as root

```sql
 create database studentdb;
 create user student identified by 'studentpass';
 use studentdb;
 grant all privileges on studentdb to student;
 grant all privileges on studentdb.* to student;
```