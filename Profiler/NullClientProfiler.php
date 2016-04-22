<?php

/*
 * This file is part of the JarvisBundle package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LinkValue\JarvisBundle\Profiler;

use Symfony\Component\Stopwatch\StopwatchEvent;

/**
 * NullClientProfiler.
 *
 * @package JarvisBundle
 * @author Oliver Thebault <oliver.thebault@link-value.fr>
 */
class NullClientProfiler implements ClientProfilerInterface
{
    /**
     * {@inheritdoc}
     */
    public function startProfiling($message)
    {
        return new StopwatchEvent(microtime());
    }

    /**
     * {@inheritdoc}
     */
    public function stopProfiling(StopwatchEvent $event, $result)
    {
        $event->stop();
    }

    /**
     * {@inheritdoc}
     */
    public function getCalls()
    {
        return array();
    }
}
