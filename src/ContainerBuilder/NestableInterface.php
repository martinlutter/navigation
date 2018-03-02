<?php

namespace Everlution\Navigation\ContainerBuilder;

use Everlution\Navigation\Item\ItemInterface;

/**
 * Class NestableInterface
 * @author Martin Lutter <martin.lutter@everlution.sk>
 */
interface NestableInterface
{
    /**
     * @return string
     */
    public function getParentNavigation(): string;

    /**
     * @return ItemInterface
     */
    public function getParentItem(): ItemInterface;
}