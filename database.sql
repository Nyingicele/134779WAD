-- create database
DROP DATABASE IF EXISTS webapp;
CREATE DATABASE IF NOT EXISTS webapp;
USE webapp;
-- create table
DROP TABLE IF EXISTS users;
CREATE TABLE IF NOT EXISTS users (
    userid bigint(11) NOT NULL AUTO_INCREMENT,
    fullname varchar(50) NOT NULL DEFAULT '',
    username varchar(50) NOT NULL DEFAULT '',
    email varchar(50) NOT NULL DEFAULT '',
    password varchar(50) NOT NULL DEFAULT '',
    userType varchar(30) NOT NULL DEFAULT '',
