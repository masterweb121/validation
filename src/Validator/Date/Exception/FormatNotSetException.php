<?php
/**
 * This file is part of Vegas package
 *
 * @author Mateusz Aniołek <dev@mateusz-aniolek.com>
 * @copyright Amsterdam Standard Sp. Z o.o.
 * @homepage https://bitbucket.org/amsdard/vegas-phalcon
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Vegas\Validation\Validator\Date\Exception;

class FormatNotSetException extends \Vegas\Validation\Validator\Date\Exception
{
    protected $message = 'Format option must be set';
}
