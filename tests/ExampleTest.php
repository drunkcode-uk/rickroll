<?php

namespace Drunkcode\rickroll\Tests;

use Orchestra\Testbench\TestCase;
use Drunkcode\rickroll\rickrollServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [rickrollServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
