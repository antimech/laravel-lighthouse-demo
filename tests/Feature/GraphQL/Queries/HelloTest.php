<?php declare(strict_types=1);

namespace Tests\Feature\GraphQL\Queries;

use Tests\TestCase;

final class HelloTest extends TestCase
{
    public function test_Hello(): void
    {
        $this->graphQL(/** @lang GraphQL */ '
            {
                hello
            }
        ')->assertJson([
            'data' => [
                'hello' => 'world!',
            ],
        ]);
    }
}
