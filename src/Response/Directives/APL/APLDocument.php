<?php

namespace MaxBeckers\AmazonAlexa\Response\Directives\APL;

class APLDocument
{
    public string $name;
    public string $type;

    public static function create(string $name, string $type = 'Link'): static
    {
        $document = new self();

        $document->name = $name;
        $document->type = $type;

        return $document;
    }
}