<?php

namespace MaxBeckers\AmazonAlexa\Response\Directives\APL;

class APLDataSource
{
    public string $name;

    public array $data;

    public static function create(string $name, array $data = []): static
    {
        $dataSource = new self();

        $dataSource->name = $name;
        $dataSource->data = $data;

        return $dataSource;
    }
}