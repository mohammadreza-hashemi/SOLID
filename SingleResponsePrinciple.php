<?php
//https://parsclick.net/article/%D8%A7%D8%B5%D9%88%D9%84-solid-%D8%AF%D8%B1-php
//هر کلاس بایستی فقط یک کار انجام دهد نه بیشتر

class Setting 
{
    public function setSetting()
    {
        return  'set setting';
    }
    public function getSetting()
    {
        return 'getSetting';
    }
    public function output()
    {
        return 'output';
    }
}
//top class is false

//buttom classes are true
class Sett{
    public function setSeting()
    {
        //TODO::getSetting
    }
    public function getSetting()
    {
        //TODO::setSetting  
    }
}
class Output{
    public function output()
    {
        //TODO::OUTPUT
    }
}




