<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
}

// <?php

// namespace Tests\Feature;

// use PHPUnit\Framework\TestCase;
// use Illuminate\Foundation\Testing\WithFaker;
// use Illuminate\Foundation\Testing\RefreshDatabase;

// class AnotherTest extends TestCase {
//     public function testExample() {
//         // Do something
//     }
// }