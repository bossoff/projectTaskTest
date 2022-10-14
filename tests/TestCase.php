<?php

// namespace Tests;

namespace Tests\Feature;
// use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Tests\CreatesApplication;
use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AnotherTest extends TestCase {

    public function testExample() {

        CreatesApplication::class;
    }
}