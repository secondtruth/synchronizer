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
 * @license  http://opensource.org/licenses/MIT The MIT License
 */

namespace FlameCore\Synchronizer;

/**
 * The SynchronizerTarget interface
 *
 * @author   Christian Neff <christian.neff@gmail.com>
 */
interface SynchronizerTargetInterface
{
    /**
     * @param array $settings
     */
    public function __construct(array $settings);
}
