<?php

/*
 * This file is part of jwt-auth.
 *
 * (c) 2014-2021 Sean armj <armj148@gmail.com>
 * (c) 2021 PHP Open Source Saver
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Apadana\Auth_armj\Http\Parser;

trait KeyTrait
{
    /**
     * The key.
     *
     * @var string
     */
    protected $key = 'token';

    /**
     * Set the key.
     *
     * @param string $key
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Get the key.
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }
}