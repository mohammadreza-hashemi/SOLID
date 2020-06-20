<?php

//به مفهوم اینکه هر کلاسی که از کلاس دیگر ارث بری میکند هرگز نباید رفتار کلاس والد را تغییر دهد 


interface   OutputInterface{
    public function show($data);
}

class Output implements OutputInterface
{
    public function show($data)
    {
        //show data
    }
}
class Formatter extends Output
{
    public function JsonFormat($data)
    {
        //return json data
    }
    public function show($data)
    {
        $data=$this->JsonFormat($data);
        //show data
    }
}
/**
 * در این کد اصول Solid رعایت نشده است یا به عبارت بهتر Liskov substitution به درستی اعمال نشده است
 * کلاس Formatter فرزند کلاس Output میباشد و باید تمامی فعالیت های کلاس والد را بتواند انجام دهد.
 * اگر قسمتی از کد که از کلاس Output استفاده شده است را تغییر دهیم به صورتی که از کلاس Formatter استفاده کند
 * خروجی مد نظر ما داده نمیشود زیرا در این کلاس متد show را ما مجددا بازنویسی کردیم و خروجی به صورت json نمایش داده میشود.
 */