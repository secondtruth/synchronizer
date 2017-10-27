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

/**
 * The SynchronizerFactory interface
 *
 * @author   Christian Neff <christian.neff@gmail.com>
 */
interface SynchronizerFactoryInterface
{
    /**
     * @param array $sourceSettings
     * @param array $targetSettings
     * @return \FlameCore\Synchronizer\SynchronizerInterface
     */
    public function create(array $sourceSettings, array $targetSettings);

    /**
     * @param array $settings
     * @return \FlameCore\Synchronizer\SynchronizerSourceInterface
     */
    public function createSource(array $settings);

    /**
     * @param array $settings
     * @return \FlameCore\Synchronizer\SynchronizerTargetInterface
     */
    public function createTarget(array $settings);

    /**
     * @param string $type
     * @param string $class
     * @throws \DomainException
     * @throws \LogicException
     */
    public function registerSource($type, $class);

    /**
     * @param string $type
     * @param string $class
     * @throws \DomainException
     * @throws \LogicException
     */
    public function registerTarget($type, $class);
}
