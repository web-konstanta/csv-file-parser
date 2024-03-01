<?php

declare(strict_types=1);

function formatDate(string $originalDate): string
{
    $timestamp = strtotime($originalDate);
    return date('M j, Y', $timestamp);
}