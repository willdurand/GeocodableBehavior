<?php

/*
 * This file is part of the Propel package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license    MIT License
 */

/**
 * Dummy class for providing api keys.
 *
 * @author     Ulrik Nielsen <mr.base@gmail.com>
 * @package    generator.behavior
 */
class GoogleMapsApikeyProvider
{
    CONST KEY = 'ABQIAAAAUlCtnJfyCpB0HiNZhirLCxRnSy3HMd4FBmfa5RGCpEhkCZ57ohTX_pIptNo67DhWPTPD9hmt17-UBw';

    public static function getKey()
    {
        return self::KEY;
    }

    public function getGoogleMapsKey()
    {
      return self::KEY;
    }
}
