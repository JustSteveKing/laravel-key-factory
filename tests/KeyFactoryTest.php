<?php

namespace JustSteveKing\KeyFactory\Tests;

use Illuminate\Support\Str;
use JustSteveKing\KeyFactory\KeyFactory;
use JustSteveKing\KeyFactory\KeyFactoryFacade;

class KeyFactoryTest extends TestCase
{
    /** @test */
    public function it_can_generate_a_new_key(): void
    {
        $key = KeyFactory::generate(
            prefix: 'test',
        );

        $this->assertTrue(
            condition: str_contains($key, 'test'),
        );
    }

    /**
     * @test
     */
    public function it_can_generate_a_new_key_using_the_string_macro()
    {
        $key = Str::key(
            prefix: 'test',
        );

        $this->assertTrue(
            condition: str_contains($key, 'test'),
        );
    }
}
