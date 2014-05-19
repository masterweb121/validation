<?php
/**
 * This file is part of Vegas package
 *
 * @author Arkadiusz Ostrycharz <arkadiusz.ostrycharz@gmail.com>
 * @copyright Amsterdam Standard Sp. Z o.o.
 * @homepage https://bitbucket.org/amsdard/vegas-phalcon
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Vegas\Validation\Validator;

use Phalcon\Validation\Validator,
    Phalcon\Validation\Message;

class Email extends Validator
{
    use \Vegas\Validation\ValidatorTrait;
    
    protected function validateSingle($value)
    {
        if ($value && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $this->validator->appendMessage(new Message($this->getMessage(), $this->attribute, 'Email'));
            return false;
        }
        
        return true;
    }
    
    private function getMessage()
    {
        $message = $this->getOption('message');
        if (!$message) {
            $message = 'One of the emails is not valid.';
        }
        
        return $message;
    }
}