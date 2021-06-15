<?php

declare(strict_types=1);

namespace Castrocrea\MixpanelBundle\Mixpanel\Event;

use Castrocrea\MixpanelBundle\Annotation\Annotation;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\EventDispatcher\Event;

class MixpanelEvent extends Event
{
    private $annotation;
    private $request;

    public function __construct(Annotation $annotation, Request $request)
    {
        $this->annotation = $annotation;
        $this->request    = $request;
    }

    public function getAnnotation(): Annotation
    {
        return $this->annotation;
    }

    public function getRequest(): Request
    {
        return $this->request;
    }
}
