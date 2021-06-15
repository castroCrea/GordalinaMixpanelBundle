<?php

declare(strict_types=1);

/*
 * This file is part of the mixpanel bundle.
 *
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Castrocrea\MixpanelBundle\Annotation;

/**
 * @Annotation
 * @Target({"CLASS", "METHOD"})
 *
 */
final class Remove extends Annotation
{
    /**
     * @var mixed
     */
    public $id;

    /**
     * @Required
     *
     * @var array
     */
    public $props;

    /**
     * @var bool
     */
    public $ignoreTime;
}
