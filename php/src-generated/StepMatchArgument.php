<?php

declare(strict_types=1);

/**
 * This code was auto-generated by {this script}[https://github.com/cucumber/messages/blob/main/codegen/codegen.rb]
 */

namespace Cucumber\Messages;

use JsonSerializable;
use Cucumber\Messages\DecodingException\SchemaViolationException;

/**
 * Represents the StepMatchArgument message in Cucumber's message protocol
 * @see https://github.com/cucumber/messages
 *
 * Represents a single argument extracted from a step match and passed to a step definition.
 * This is used for the following purposes:
 * - Construct an argument to pass to a step definition (possibly through a parameter type transform)
 * - Highlight the matched parameter in rich formatters such as the HTML formatter
 *
 * This message closely matches the `Argument` class in the `cucumber-expressions` library. */
final class StepMatchArgument implements JsonSerializable
{
    use JsonEncodingTrait;

    /**
     * Construct the StepMatchArgument with all properties
     *
     */
    public function __construct(

        /**
         * Represents the outermost capture group of an argument. This message closely matches the
         * `Group` class in the `cucumber-expressions` library.
         */
        public readonly Group $group = new Group(),
        public readonly ?string $parameterTypeName = null,
    ) {
    }

    /**
     * @throws SchemaViolationException
     *
     * @internal
     */
    public static function fromArray(array $arr): self
    {
        self::ensureGroup($arr);
        self::ensureParameterTypeName($arr);

        return new self(
            Group::fromArray($arr['group']),
            isset($arr['parameterTypeName']) ? (string) $arr['parameterTypeName'] : null,
        );
    }

    /**
     * @psalm-assert array{group: array} $arr
     */
    private static function ensureGroup(array $arr): void
    {
        if (!array_key_exists('group', $arr)) {
            throw new SchemaViolationException('Property \'group\' is required but was not found');
        }
        if (array_key_exists('group', $arr) && !is_array($arr['group'])) {
            throw new SchemaViolationException('Property \'group\' was not array');
        }
    }

    /**
     * @psalm-assert array{parameterTypeName?: string|int|bool} $arr
     */
    private static function ensureParameterTypeName(array $arr): void
    {
        if (array_key_exists('parameterTypeName', $arr) && is_array($arr['parameterTypeName'])) {
            throw new SchemaViolationException('Property \'parameterTypeName\' was array');
        }
    }
}
