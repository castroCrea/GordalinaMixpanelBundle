<?php

declare(strict_types=1);

/*
 * This file is part of the mixpanel bundle.
 *
 * (c) Samuel Gordalina <https://github.com/gordalina/mixpanel-bundle>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Castrocrea\MixpanelBundle\Annotation;

/**
 * Abstract Annotation
 *
 * @author Samuel Gordalina <samuel.gordalina@gmail.com>
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
