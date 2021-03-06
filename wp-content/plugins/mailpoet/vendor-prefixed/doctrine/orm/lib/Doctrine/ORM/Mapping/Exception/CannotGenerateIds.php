<?php
declare (strict_types=1);
namespace MailPoetVendor\Doctrine\ORM\Mapping\Exception;
if (!defined('ABSPATH')) exit;
use MailPoetVendor\Doctrine\DBAL\Platforms\AbstractPlatform;
use MailPoetVendor\Doctrine\ORM\Exception\ORMException;
use LogicException;
use function get_class;
use function sprintf;
final class CannotGenerateIds extends ORMException
{
 public static function withPlatform(AbstractPlatform $platform) : self
 {
 return new self(sprintf('Platform %s does not support generating identifiers', get_class($platform)));
 }
}
