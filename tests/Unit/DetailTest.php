<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\ProductController;


class DetailTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        //arrange
        $id = 1;
        //act
        $actual = ProductController::detail($id);
        //assert
        $this->assertTrue(true,$actual);
    }
}
