<?php

declare(strict_types=1);

/**
 * This code was auto-generated by {this script}[https://github.com/cucumber/messages/blob/main/jsonschema/scripts/codegen.rb]
 */

namespace Cucumber\Messages;

use JsonSerializable;
use Cucumber\Messages\DecodingException\SchemaViolationException;

/**
 * Represents the TestStepFinished message in Cucumber's message protocol
 * @see https://github.com/cucumber/messages
 *
 */
final class TestStepFinished implements JsonSerializable
{
    use JsonEncodingTrait;

    /**
     * Construct the TestStepFinished with all properties
     *
     */
    public function __construct(
        public readonly string $testCaseStartedId = '',
        public readonly string $testStepId = '',
        public readonly TestStepResult $testStepResult = new TestStepResult(),
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
        self::ensureTestCaseStartedId($arr);
        self::ensureTestStepId($arr);
        self::ensureTestStepResult($arr);
        self::ensureTimestamp($arr);

        return new self(
            (string) $arr['testCaseStartedId'],
            (string) $arr['testStepId'],
            TestStepResult::fromArray($arr['testStepResult']),
            Timestamp::fromArray($arr['timestamp']),
        );
    }

    /**
     * @psalm-assert array{testCaseStartedId: string|int|bool} $arr
     */
    private static function ensureTestCaseStartedId(array $arr): void
    {
        if (!array_key_exists('testCaseStartedId', $arr)) {
            throw new SchemaViolationException('Property \'testCaseStartedId\' is required but was not found');
        }
        if (array_key_exists('testCaseStartedId', $arr) && is_array($arr['testCaseStartedId'])) {
            throw new SchemaViolationException('Property \'testCaseStartedId\' was array');
        }
    }

    /**
     * @psalm-assert array{testStepId: string|int|bool} $arr
     */
    private static function ensureTestStepId(array $arr): void
    {
        if (!array_key_exists('testStepId', $arr)) {
            throw new SchemaViolationException('Property \'testStepId\' is required but was not found');
        }
        if (array_key_exists('testStepId', $arr) && is_array($arr['testStepId'])) {
            throw new SchemaViolationException('Property \'testStepId\' was array');
        }
    }

    /**
     * @psalm-assert array{testStepResult: array} $arr
     */
    private static function ensureTestStepResult(array $arr): void
    {
        if (!array_key_exists('testStepResult', $arr)) {
            throw new SchemaViolationException('Property \'testStepResult\' is required but was not found');
        }
        if (array_key_exists('testStepResult', $arr) && !is_array($arr['testStepResult'])) {
            throw new SchemaViolationException('Property \'testStepResult\' was not array');
        }
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
