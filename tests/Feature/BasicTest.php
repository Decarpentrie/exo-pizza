<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BasicTest extends TestCase
{
    public function testDatabase()
    {
    	$this->assertDatabaseHas('customers', [
    		'first_name' => 'truc'
    ]);
    	$this->assertDatabaseHas('pizzas', [
        	'name' => 'surprise'
    ]);
    	$this->assertDatabaseHas('orders', [
        	'customer_id' => '1'
    ]);  
    	$this->assertDatabaseHas('pizza_order', [
        	'size' => '1'
    ]);
    	$this->assertDatabaseHas('products', [
        	'name' => 'surprise'
    ]);
    	$this->assertDatabaseHas('product_pizza', [
        	'product_id' => '1'
    ]);
    }
}
