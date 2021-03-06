<?php
/**
 * This file is part of Vegas package
 *
 * @author Arkadiusz Ostrycharz <aostrycharz@amsterdam-standard.pl>
 * @copyright Amsterdam Standard Sp. Z o.o.
 * @homepage http://vegas-cmf.github.io/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Vegas\Validation\Validator;

use Phalcon\Validation\Validator;
use Phalcon\Validation\Message;

class Between extends Validator\Between
{
    use \Vegas\Validation\ValidatorTrait;

    protected function validateSingle($value)
    {
        if ($value > $this->getOption('max') || $value < $this->getOption('min')) {
            $this->validator->appendMessage(new Message($this->getMessage(), $this->attribute, 'Between'));
            return false;
        }

        return true;
    }

    private function getMessage()
    {
        $message = $this->getOption('message');
        if (!$message) {
            $message = 'Field should have value between '.$this->getOption('min').' and '.$this->getOption('max').'.';
        }

        return $message;
    }
}
