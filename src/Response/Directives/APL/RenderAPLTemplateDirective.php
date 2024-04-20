<?php

namespace MaxBeckers\AmazonAlexa\Response\Directives\APL;

use MaxBeckers\AmazonAlexa\Response\Directives\Directive;

class RenderAPLTemplateDirective extends Directive
{
    const TYPE = 'Alexa.Presentation.APL.RenderDocument';

    public string $token;

    public APLDocument $document;

    public array $datasources = [];

    public static function create(string $token, APLDocument $document): static
    {
        $directive = new self();

        $directive->type = self::TYPE;
        $directive->token = $token;
        $directive->document = $document;

        return $directive;
    }

    public function addDataSource(APLDataSource $dataSource): static
    {
        $this->datasources[$dataSource->name] = $dataSource->data;

        return $this;
    }
}