<?php 
abstract class key {
    // abstract method tidak bisa di set sebagai private, karena itu akan menyalahi tujuan
    // dari abstract class yang harus ditimpa di dalam class turunan
    abstract private function kun();
    // Abstract function key::kun() cannot be declared private
}