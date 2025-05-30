<?php

namespace Hexlet\Phpunit\Tests;

require_once "vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use function Hexlet\Phpunit\Utils\reverseString;

// Класс UtilsTest наследует класс TestCase
// Имя класса совпадает с именем файла
class UtilsTest extends TestCase
{
    // Метод (функция), определенный внутри класса,
    // Должен начинаться со слова test
    // Ключевое слово public нужно, чтобы PHPUnit мог вызвать этот тест снаружи
    public function testReverse(): void
    {
        // Сначала идет ожидаемое значение (expected)
        // И только потом актуальное (actual)
        $this->assertEquals('', reverseString(''));
        $this->assertEquals('olleh', reverseString('hello'));

        $before = file_get_contents(__DIR__ . "/../tests/fixtures/before.txt");
        $after = file_get_contents(__DIR__ . "/../tests/fixtures/after.txt");
        $this->assertEquals($after, reverseString($before));

        $string1 = 'mnbvcxzlkjhgfdsapoiuytrewq';
        $string2 = 'qwertyuiopasdfghjklzxcvbnm';
        $this->assertEquals($string1, reverseString($string2));
    }
}
