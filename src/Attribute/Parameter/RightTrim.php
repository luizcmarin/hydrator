<?php

declare(strict_types=1);

namespace Yiisoft\Hydrator\Attribute\Parameter;

use Attribute;

/**
 * Strip whitespace (or other characters) from the end of a resolved string value.
 *
 * @see https://www.php.net/manual/function.rtrim.php
 */
#[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_PARAMETER | Attribute::IS_REPEATABLE)]
final class RightTrim implements ParameterAttributeInterface
{
    /**
     * @param string|null $characters The list all characters that you want to be stripped. With `..` you can specify
     * a range of characters.
     */
    public function __construct(
        public readonly ?string $characters = null,
    ) {
    }

    public function getResolver(): string
    {
        return RightTrimResolver::class;
    }
}
