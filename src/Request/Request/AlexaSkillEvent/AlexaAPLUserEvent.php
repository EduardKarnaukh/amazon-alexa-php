<?php

namespace MaxBeckers\AmazonAlexa\Request\Request\AlexaSkillEvent;

use MaxBeckers\AmazonAlexa\Request\Request\AbstractRequest;

class AlexaAPLUserEvent extends AlexaSkillEventRequest
{
    public const TYPE = 'Alexa.Presentation.APL.UserEvent';

    public $arguments;

    /**
     * @inheritdoc
     */
    public static function fromAmazonRequest(array $amazonRequest): AbstractRequest
    {
        $event = new self();

        $event->type = self::TYPE;
        $event->arguments = isset($amazonRequest['arguments']) ? $amazonRequest['arguments'] : [];

        return $event;
    }
}