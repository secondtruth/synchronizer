<?php
/**
 * Synchronizer Library
 * Copyright (C) 2014 IceFlame.net
 *
 * Permission to use, copy, modify, and/or distribute this software for
 * any purpose with or without fee is hereby granted, provided that the
 * above copyright notice and this permission notice appear in all copies.
 *
 * THE SOFTWARE IS PROVIDED "AS IS" AND THE AUTHOR DISCLAIMS ALL WARRANTIES
 * WITH REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS. IN NO EVENT SHALL THE AUTHOR BE LIABLE
 * FOR ANY SPECIAL, DIRECT, INDIRECT, OR CONSEQUENTIAL DAMAGES OR ANY
 * DAMAGES WHATSOEVER RESULTING FROM LOSS OF USE, DATA OR PROFITS, WHETHER
 * IN AN ACTION OF CONTRACT, NEGLIGENCE OR OTHER TORTIOUS ACTION, ARISING
 * OUT OF OR IN CONNECTION WITH THE USE OR PERFORMANCE OF THIS SOFTWARE.
 *
 * @package  FlameCore\Synchronizer
 * @version  0.1-dev
 * @link     http://www.flamecore.org
 * @license  ISC License <http://opensource.org/licenses/ISC>
 */

namespace FlameCore\Synchronizer;

use FlameCore\EventObserver\ObserverInterface;

/**
 * The AbstractSynchronizer class
 *
 * @author   Christian Neff <christian.neff@gmail.com>
 */
abstract class AbstractSynchronizer implements SynchronizerInterface
{
    /**
     * @var \FlameCore\Synchronizer\SynchronizerSourceInterface
     */
    protected $source;

    /**
     * @var \FlameCore\Synchronizer\SynchronizerTargetInterface
     */
    protected $target;

    /**
     * @var \FlameCore\EventObserver\ObserverInterface
     */
    protected $observer;

    /**
     * @var array
     */
    protected $excludes = array();

    /**
     * @param \FlameCore\Synchronizer\SynchronizerSourceInterface $source
     * @return \FlameCore\Synchronizer\SynchronizerInterface
     */
    public function setSource(SynchronizerSourceInterface $source)
    {
        if (!$this->supportsSource($source)) {
            throw new \InvalidArgumentException(sprintf('%s does not support %s.', get_class($this), get_class($source)));
        }

        $this->source = $source;

        return $this;
    }

    /**
     * @param \FlameCore\Synchronizer\SynchronizerTargetInterface $target
     * @return \FlameCore\Synchronizer\SynchronizerInterface
     */
    public function setTarget(SynchronizerTargetInterface $target)
    {
        if (!$this->supportsTarget($target)) {
            throw new \InvalidArgumentException(sprintf('%s does not support %s.', get_class($this), get_class($target)));
        }

        $this->target = $target;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getExcludes()
    {
        return $this->excludes;
    }

    /**
     * @param array $excludes
     * @return \FlameCore\Synchronizer\SynchronizerInterface
     */
    public function setExcludes(array $excludes)
    {
        $this->excludes = $excludes;

        return $this;
    }

    /**
     * @param string $exclude
     * @return \FlameCore\Synchronizer\SynchronizerInterface
     */
    public function exclude($exclude)
    {
        $this->excludes[] = $exclude;

        return $this;
    }

    /**
     * @param \FlameCore\EventObserver\ObserverInterface $observer
     * @return \FlameCore\Synchronizer\SynchronizerInterface
     */
    public function observe(ObserverInterface $observer)
    {
        $this->observer = $observer;

        return $this;
    }
}
