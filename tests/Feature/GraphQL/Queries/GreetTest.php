<?php declare(strict_types=1);

namespace Tests\Feature\GraphQL\Queries;

use Tests\TestCase;

final class GreetTest extends TestCase
{
    public function test_Greet(): void
    {
        $this->graphQL(/** @lang GraphQL */ '
            {
                greet(name: "Artur")
            }
        ')->assertJson([
            'data' => [
                'greet' => 'Hello, Artur!',
            ],
        ]);
    }
}
