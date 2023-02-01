<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\App;
use Tests\TestCase;

class AppEnvironmentTest extends TestCase
{
   public function testAppEnv(){
    var_dump(App::environment());
    // mengecek lagi didalam mode testing,dev,production
    if (App::environment(['testing', 'dev', 'prod', 'local'])) {
        self::assertTrue(true);
    } 
   }
}
