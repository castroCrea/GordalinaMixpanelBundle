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
 * Abstract Annotation
 *
 */
abstract class Annotation
{
    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $condition;
}
