<?php

declare(strict_types=1);

/**
 * This code was auto-generated by {this script}[https://github.com/cucumber/messages/blob/main/jsonschema/scripts/codegen.rb]
 */

namespace Cucumber\Messages;

use JsonSerializable;
use Cucumber\Messages\DecodingException\SchemaViolationException;

/**
 * Represents the TestRunStarted message in Cucumber's message protocol
 * @see https://github.com/cucumber/messages
 *
 */
final class TestRunStarted implements JsonSerializable
{
    use JsonEncodingTrait;

    /**
     * Construct the TestRunStarted with all properties
     *
     */
    public function __construct(
        public readonly Timestamp $timestamp = new Timestamp(),
    ) {
    }

    /**
     * @throws SchemaViolationException
     *
     * @internal
     */
    public static function fromArray(array $arr): self
    {
        self::ensureTimestamp($arr);

        return new self(
            Timestamp::fromArray($arr['timestamp']),
        );
    }

    /**
     * @psalm-assert array{timestamp: array} $arr
     */
    private static function ensureTimestamp(array $arr): void
    {
        if (!array_key_exists('timestamp', $arr)) {
            throw new SchemaViolationException('Property \'timestamp\' is required but was not found');
        }
        if (array_key_exists('timestamp', $arr) && !is_array($arr['timestamp'])) {
            throw new SchemaViolationException('Property \'timestamp\' was not array');
        }
    }
}
