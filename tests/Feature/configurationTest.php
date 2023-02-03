<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class configurationTest extends TestCase
{
    public function testConfig(){
        $first_name = config('contoh.author.first');
        $last_name = config('contoh.author.last');
        $email = config('contoh.email');
        $web = config('contoh.web');

        
    }
}
