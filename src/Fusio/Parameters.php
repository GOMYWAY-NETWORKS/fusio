<?php
/*
 * Fusio
 * A web-application to create dynamically RESTful APIs
 *
 * Copyright (C) 2015 Christoph Kappestein <k42b3.x@gmail.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

namespace Fusio;

use ArrayIterator;
use IteratorAggregate;

/**
 * Parameters
 *
 * @author  Christoph Kappestein <k42b3.x@gmail.com>
 * @license http://www.gnu.org/licenses/gpl-3.0
 * @link    http://fusio-project.org
 */
class Parameters implements IteratorAggregate
{
    protected $container;

    public function __construct(array $container)
    {
        $this->container = $container;
    }

    public function get($key)
    {
        return isset($this->container[$key]) ? $this->container[$key] : null;
    }

    public function has($key)
    {
        return isset($this->container[$key]);
    }

    public function isEmpty()
    {
        return empty($this->container);
    }

    public function getIterator()
    {
        return new ArrayIterator($this->container);
    }

    public function toArray()
    {
        return $this->container;
    }
}
