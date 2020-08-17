<?php

namespace Tests\Feature\Authors;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ListAuthorsTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function can_fetch_all_authors()
    {
       $authors = factory(USer::class)->times(3)->create();

       $this->jsonApi()->get(route('api.v1.authors.index'))
           ->assertSee($authors[0]->name);
    }
}
