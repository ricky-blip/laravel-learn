<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Env;
use Tests\TestCase;

class EnvironmentTest extends TestCase
{
    public function testGetEnvironment(){
        //memanggil function env
        $flutter = env('FLUTTER');
        //set nilai untuk env
        self::assertEquals('Ricky Rinaldy', $flutter);
    }
    
    public function testDefaultEnv(){
        $pembuat = env('PEMBUAT', 'Rick');

        self::assertEquals('Rick', $pembuat);
    }
    
    public function testDefaultEnv1(){
        $pembuat1 = Env::get('PEMBUAT1', 'Rocky');

        self::assertEquals('Rocky', $pembuat1);
    }
}
