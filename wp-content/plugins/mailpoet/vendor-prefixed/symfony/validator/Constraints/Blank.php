<?php
namespace MailPoetVendor\Symfony\Component\Validator\Constraints;
if (!defined('ABSPATH')) exit;
use MailPoetVendor\Symfony\Component\Validator\Constraint;
class Blank extends Constraint
{
 public const NOT_BLANK_ERROR = '183ad2de-533d-4796-a439-6d3c3852b549';
 protected static $errorNames = [self::NOT_BLANK_ERROR => 'NOT_BLANK_ERROR'];
 public $message = 'This value should be blank.';
}
