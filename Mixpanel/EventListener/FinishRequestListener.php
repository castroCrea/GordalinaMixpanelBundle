<?php

declare(strict_types=1);

/*
 * This file is part of the mixpanel bundle.
 *
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Castrocrea\MixpanelBundle\Mixpanel\EventListener;

use Castrocrea\MixpanelBundle\Mixpanel\Mixpanel\Flusher;
use Symfony\Component\HttpKernel\Event\FinishRequestEvent;

class FinishRequestListener
{
    /**
     * @var Flusher
     */
    private $flusher;

    public function __construct(Flusher $flusher)
    {
        $this->flusher = $flusher;
    }

    public function onFinishRequest(FinishRequestEvent $e)
    {
        $this->flusher->flush();
    }
}
