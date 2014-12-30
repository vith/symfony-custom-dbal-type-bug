<?php

namespace Vith\CustomTypeBugBundle\DoctrineTypes;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;

class NegativeType extends Type
{
    const NEGATIVE = 'negative';

    public function getSqlDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        return 'NegativeType';
    }

    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        return $value * -1;
    }

    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        return $value * -1;
    }

    public function getName()
    {
        return self::NEGATIVE;
    }
}
