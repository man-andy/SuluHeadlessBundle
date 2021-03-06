<?php

declare(strict_types=1);

/*
 * This file is part of Sulu.
 *
 * (c) Sulu GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Sulu\Bundle\HeadlessBundle\Content;

use Sulu\Component\Content\Compat\PropertyInterface;

interface ContentResolverInterface
{
    /**
     * @param mixed $data
     * @param mixed[] $attributes
     */
    public function resolve($data, PropertyInterface $property, string $locale, array $attributes = []): ContentView;
}
