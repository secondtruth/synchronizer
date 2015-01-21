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

use FlameCore\Observer\ObserverInterface;

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
     * @param \FlameCore\Observer\ObserverInterface $observer
     */
    public function observe(ObserverInterface $observer);
}
