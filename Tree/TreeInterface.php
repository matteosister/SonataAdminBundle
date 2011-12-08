<?php

/*
 * This file is part of the Sonata package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


namespace Sonata\AdminBundle\Tree;

interface TreeInterface
{
    /**
     * Returns an array representation of children nodes of a node
     *
     * @return array children list
     */
    function getChildren();

    /**
     * Returns true if the tree node has children
     *
     * @return boolean
     */
    function hasChildren();
}

