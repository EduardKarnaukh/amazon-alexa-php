<?php

namespace MaxBeckers\AmazonAlexa\Response\Directives\APL;

class APLDocumentLink implements APLDocumentInterface
{
    public string $src;
    public string $type;

    public static function create(string $src, string $type = 'Link'): static
    {
        $document = new self();

        $document->src = $src;
        $document->type = $type;

        return $document;
    }
}