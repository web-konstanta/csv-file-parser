<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSV file parser</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }

        table tr th, table tr td {
            padding: 5px;
            border: 1px solid #eee;
        }

        tfoot tr th, tfoot tr td {
            font-size: 20px;
        }

        tfoot tr th {
            text-align: right;
        }
    </style>
</head>
<body>
<table>
    <thead>
        <tr>
            <th>Date</th>
            <th>Check</th>
            <th>Description</th>
            <th>Amount</th>
        </tr>
    </thead>
    <tbody>
        <?php if(is_array($transactions)): ?>
            <?php foreach($transactions as $transaction): ?>
                <tr>
                    <td><?= formatDate($transaction['date']) ?></td>
                    <td><?= $transaction['check'] ?></td>
                    <td><?= $transaction['description'] ?></td>
                    <td style="color: <?= $transaction['amount'] > 0 ? 'green' : 'red' ?>"><?= $transaction['amount'] ?></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
    <tfoot>
        <tr>
            <th colspan="3">Total Income:</th>
            <td><?= $totals['totalIncome'] ?></td>
        </tr>
        <tr>
            <th colspan="3">Total Expense:</th>
            <td><?= $totals['totalExpense'] ?></td>
        </tr>
        <tr>
            <th colspan="3">Net Total:</th>
            <td><?= $totals['netTotal'] ?></td>
        </tr>
    </tfoot>
</table>
</body>
</html>