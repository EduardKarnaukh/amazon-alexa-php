<?php

namespace MaxBeckers\AmazonAlexa\Response\Directives\APL;

/** @todo add settings,  */
class APLDocument implements APLDocumentInterface
{
    public const THEME_LIGHT = 'light';
    public const THEME_DARK = 'dark';

    public const ALEXA_LAYOUTS_IMPORT = [
        'name' => 'alexa-layouts',
        'version' => '1.7.0'
    ];

    public $type = 'APL';
    public $version = '1.8';
    public $license = 'Ecomitize LLC';
    public $settings = [];
    public $theme = self::THEME_DARK;
    public $import = [
        self::ALEXA_LAYOUTS_IMPORT
    ];
    public $resources = [];
    public $styles = [];
    public $onMount = [];
    public $graphics = [];
    public $commands = [];
    public $layouts = [];
    public $mainTemplate = [];

    public static function create(array $mainTemplate): static
    {
        $document = new self();

        $document->mainTemplate = $mainTemplate;

        return $document;
    }
}