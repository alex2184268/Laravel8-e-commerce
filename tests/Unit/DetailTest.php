<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
<<<<<<< HEAD
use App\Models\Product;
=======
use App\Http\Controllers\ProductController;

>>>>>>> 6908135d5f449deed4dd2c6bf69481590804a481

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
<<<<<<< HEAD
        
        $data = Product::find($id);

        
    }


=======
        //act
        $actual = ProductController::detail($id);
        //assert
        $this->assertTrue(true,$actual);
    }
>>>>>>> 6908135d5f449deed4dd2c6bf69481590804a481
}
