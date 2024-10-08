<?php

declare(strict_types=1);

namespace Rubel9997\MultiFileLogger\Loggers;

interface LoggerInterface
{
    /**
     * Log a message with a specific level and context.
     */
    public function log(string $level, string $message, array $context = []): void;
}
