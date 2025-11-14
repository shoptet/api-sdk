<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Articles\CreateArticleSectionResponse\CreateArticleSectionResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\ArticleSection;
use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Data extends Entity
{
    protected ArticleSection $articleSection;

    public function getArticleSection(): ArticleSection
    {
        return $this->articleSection;
    }

    public function setArticleSection(ArticleSection $articleSection): static
    {
        $this->articleSection = $articleSection;
        return $this;
    }
}
