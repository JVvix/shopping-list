# Mysql/Maria DB Notes

## Connect to DB
    sudo mysql

## SHOW/Create/Use/Delete Database
    SHOW databases;
    CREATE DATABASE database_name;
    USE database_name;
    DROP DATABASE database_name; 

## Create/Show Table
    CREATE TABLE items ( item varchar(255) );

## Adding entry into table;
    INSERT into items (item) values ('Bananna')

## Display items in table
    SELECT * from items;

## Quit DB
    exit;
