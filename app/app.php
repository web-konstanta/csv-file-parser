<?php

declare(strict_types=1);

function getTransactions(string $path): array
{
    $transactions = [];

    foreach (scandir($path) as $file) {
        if (is_dir($file)) {
            continue;
        }
        $transactions[] = transactionInfo($path . $file, 'formatTransaction');
    }

    return $transactions[0];
}

function transactionInfo(string $fileName, ?callable $transactionHandle = null): array
{
    $transactions = [];

    if (! file_exists($fileName)) {
        trigger_error('File does not exist', E_USER_ERROR);
    }

    $file = fopen($fileName, 'r');

    fgetcsv($file);

    while (($line = fgetcsv($file)) !== false) {
        if (! is_null($transactionHandle)) {
            $line = formatTransaction($line);
        }
        $transactions[] = $line;
    }

    return $transactions;
}

function formatTransaction(array $transactionRow): array
{
    [$date, $check, $description, $amount] = $transactionRow;

    return [
        'date' => $date,
        'check' => $check,
        'description' => $description,
        'amount' => $amount
    ];
}
