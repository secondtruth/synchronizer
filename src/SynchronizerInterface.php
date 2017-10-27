<?php
/**
 * FlameCore Synchronizer
 * Copyright (C) 2017 IceFlame.net
 *
 * Permission to use, copy, modify, and/or distribute this software for
 * any purpose with or without fee is hereby granted, provided that the
 * above copyright notice and this permission notice appear in all copies.
 *
 * @package  FlameCore\Synchronizer
 * @version  0.1
 * @link     http://www.flamecore.org
 * @license  http://opensource.org/licenses/ISC ISC License
 */

namespace FlameCore\Synchronizer;

use FlameCore\EventObserver\ObserverInterface;

/**
 * The Synchronizer interface
 *
 * @author   Christian Neff <christian.neff@gmail.com>
 */
interface SynchronizerInterface
{
    /**
     * @param bool $preserve
     * @return bool
     */
    public function synchronize($preserve = true);

    /**
     * @param \FlameCore\Synchronizer\SynchronizerSourceInterface $source
     */
    public function setSource(SynchronizerSourceInterface $source);

    /**
     * @param \FlameCore\Synchronizer\SynchronizerTargetInterface $target
     */
    public function setTarget(SynchronizerTargetInterface $target);

    /**
     * @param \FlameCore\Synchronizer\SynchronizerSourceInterface $source
     * @return bool
     */
    public function supportsSource(SynchronizerSourceInterface $source);

    /**
     * @param \FlameCore\Synchronizer\SynchronizerTargetInterface $target
     * @return bool
     */
    public function supportsTarget(SynchronizerTargetInterface $target);

    /**
     * @return array
     */
    public function getExcludes();

    /**
     * @param array $excludes
     */
    public function setExcludes(array $excludes);

    /**
     * @param string $exclude
     */
    public function exclude($exclude);

    /**
     * @param \FlameCore\EventObserver\ObserverInterface $observer
     */
    public function observe(ObserverInterface $observer);
}
