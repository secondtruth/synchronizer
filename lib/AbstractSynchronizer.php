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

/**
 * The AbstractSynchronizer class
 *
 * @author   Christian Neff <christian.neff@gmail.com>
 */
abstract class AbstractSynchronizer implements SynchronizerInterface
{
    protected $source;

    protected $target;

    public function __construct(SynchronizerSourceInterface $source, SynchronizerTargetInterface $target)
    {
        if (!$this->supportsSource($source))
            throw new InvalidArgumentException(sprintf('%s does not support %s.', get_class($this), get_class($source)));

        if (!$this->supportsTarget($target))
            throw new InvalidArgumentException(sprintf('%s does not support %s.', get_class($this), get_class($target)));

        $this->source = $source;
        $this->target = $target;
    }

    abstract public function synchronize();

    abstract public function supportsSource(SynchronizerSourceInterface $source);

    abstract public function supportsTarget(SynchronizerTargetInterface $target);
}
