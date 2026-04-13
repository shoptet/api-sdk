<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Articles\UpdateArticleResponse\UpdateArticleResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Article;
use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Data extends Entity
{
    protected Article $article;

    public function getArticle(): Article
    {
        return $this->article;
    }

    public function setArticle(Article $article): static
    {
        $this->article = $article;
        return $this;
    }
}
