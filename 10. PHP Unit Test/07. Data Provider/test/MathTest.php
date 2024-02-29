<?php

namespace BelajarPHPUnit;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function testManual()
    {
        Assert::assertEquals(4, Math::sum([4]));
        Assert::assertEquals(5, Math::sum([2, 3]));
        Assert::assertEquals(30, Math::sum([10, 10, 10]));
    }

    # fungsi mathSumData digunakan sebagai penyedia nilai yang nanti akan digunakan oleh testDataProvider
    function mathSumData() : array 
    {
        return [
            [[4], 4],
            [[2, 3], 5],
            [[10, 10, 10], 30],
        ];
    }

    # menggunakan anotasi @dataProvider, fungsi unit test ini menerima kembalian nilai dari fungsi mathSumData
    /**
     * @dataProvider mathSumData
     */
    public function testDataProvider(array $values, int $expected)
    {
        Assert::assertEquals($expected, Math::sum($values));
    }

    # menggunakan anotasi @testWith, namun hanya untuk data yang sederhana seperti di bawah. Jika membutuhkan object, maka tetap gunakan @dataProvider
    /**
     * @testWith [[4], 4]
     *           [[2, 3], 5]
     *           [[10, 10, 10], 30]
     */
    public function testWith(array $values, int $expected)
    {
        Assert::assertEquals($expected, Math::sum($values));
    }
}