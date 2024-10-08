<?php

declare(strict_types=1);

namespace Rubel9997\MultiFileLogger\Loggers;

abstract class AbstractLogger implements LoggerInterface
{
    /**
     * Format the log message with a timestamp, level, message, and context.
     */
    protected function formatMessage(string $level, string $message, array $context = []): string
    {
        $timestamp = date('Y-m-d H:i:s');
        $contextStr = json_encode($context);

        return "[{$timestamp}] {$level}: {$message} {$contextStr}\n";
    }
}
