<?php


// به مفهوم اینکه چند اینترفیس کوچک و خورد شده همیشه بهتر از یک اینترفیس کلی و بزرگ است

/**
 * 
 * به طور خلاصه، در OOP باید تمام تلاش خود را به کار بندیم تا Dependency (وابستگی) را مابین کلاس‌ها، ماژول‌ها و آبجکت‌های سطح بالا با ماژول‌های سطح پایین به حداقل برسانیم که با این کار، اِعمال تغییرات در آینده به مراتب راحت‌تر صورت خواهد پذیرفت.
 */

 interface FalseImageInterface{
     public function serWatermark($src);
     public function saveFile($file,$path);
 }

 class FalseImage implements FalseImageInterface
 {
    public function serWatermark($src)
    {
        //set watermark
    }
    public function saveFile($file,$path)
    {
        //set saveFile
    }
 }

 // top its false
 interface TrueImageInterface{
     public function setWatermark($src);
 }
 interface FileInterface{
     public function saveFile($file,$path);
 }

 class TrueImage implements TrueImageInterface,FileInterface
 {
    public function setWatermark($src)
    {

    }
    public function saveFile($file,$path)
    {
        
    }
 }