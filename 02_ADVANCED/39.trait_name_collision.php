<?php 
/*
Trait Name Collision
Sama seperti interface, trait juga "berbagi nama" dengan class. 
Jika sebuah trait sudah di definisikan dengan nama tertentu, 
kita tidak bisa membuat class maupun interface dengan nama yang sama
*/

trait Hp { }

// class Hp { } 

// PHP Fatal error:  Cannot declare class Hp, because the name is already in use in 