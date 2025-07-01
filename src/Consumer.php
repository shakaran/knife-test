<?php
// File: src/Consumer.php
namespace App;

class Consumer
{
    public function useConstant(): string
    {
        // Accessing the constant via class resolution, another potential false positive
        return Example::MY_CONSTANT;
    }
}