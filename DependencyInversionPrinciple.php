<?php

//بیان میکند که یک ماژول سطح بالا نباید به یک ماژول سطح پایین وابسته باشد
//بلکه هر دوی آنها باید به abstractions وابسته باشند.
//abstractions نباید به جزئیات وابسته باشد بلکه جزیئات باید به abstractions وابسته باشد



class FaleCrowler
{
    public function CrowlPage()
    {

    }    
}
class FalseEngine
{
    public function indexing(FalseCrowler $falsecrolwer)
    {
        $falsecrolwer->CrolPage();
    }
}

//top is false


interface CrowlerInterface{
    public function crowlPage();
}
class Crowler implements CrolwlerInterface
{
    public function crowlPage()
    {

    }
}
class Enginer 
{
    public function indexing(CrowlerInterface $crowler)
    {
        $crowler->crowlPage();
    }
}



