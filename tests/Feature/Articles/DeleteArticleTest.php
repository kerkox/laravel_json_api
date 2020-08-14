<?php

namespace Tests\Feature\Articles;

use App\Models\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DeleteArticleTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function guests_users_cannot_delete_articles()
    {
       $article = factory(Article::class)->create();

       $this->jsonApi()->delete(route('api.v1.articles.delete', $article))
       ->assertStatus(401);

    }
}
