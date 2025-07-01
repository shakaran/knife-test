<?php
// File: src/Example.php
namespace App;

class Example
{
    public const MY_CONSTANT = 'value';

    public function getConstantValue(): string
    {
        // Accessing the constant dynamically, which might not be detected as a "use" by swiss-knife
        return constant(self::class . '::MY_CONSTANT');
    }
}