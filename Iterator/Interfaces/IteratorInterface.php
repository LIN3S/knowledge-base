<?php

/*
 * This file is part of the Knowledge Base project.
 *
 * Copyright (c) 2015 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\KnowledgeBase\Iterator\Interfaces;

/**
 * Iterator interface.
 *
 * @author Gorka Laucirica <gorka@lin3s.com>
 * @author Beñat Espiña <bespina@lin3s.com>
 */
interface IteratorInterface
{
    /**
     * Returns files located inside doc folder.
     *
     * @return \LIN3S\KnowledgeBase\File\Interfaces\FileInterface[]
     */
    public function getFiles();
}
