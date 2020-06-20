<?php

//به معنی اینکه کلاس ها جوری نوشته بشن که قابل گسترش باشند اما نیاز به تغییر نداشته باشند


class DBFALSE
{
    public function insert($connection ,$into , $cell ,$data)
    {
        if(is_a($connection,'mysqli')){
            //connect to mysql database
        }elseif (is_a($connection,'mongodb')){
            //connection to mongodb database 
        }      
    }
}

//top class is false

interface Databases{
    public function insert($into ,$cell,$data);
    public function connect();
}

class Mysql implements Databases
{
    public function connect()
    {
        //connect to mysql
    }
    public function insert($into,$cell,$data)
    {
        //insert to database
    }
}

class Nosql implements Databases
{
    public function connect()
    {
        //conect to nosql 
    }
    public function insert()
    {
        //insert to database
    }
}


class DBTRUE
{
    public function isnsert($connection,$into,$cell,$data)
    {
        $connection->connect();
        $connection->insert($into,$cell,$data);
    }
}

