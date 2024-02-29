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

    </tbody>
    <tfoot>
    <tr>
        <th colspan="3">Total Income:</th>
        <td></td>
    </tr>
    <tr>
        <th colspan="3">Total Expense:</th>
        <td></td>
    </tr>
    <tr>
        <th colspan="3">New Total:</th>
        <td></td>
    </tr>
    </tfoot>
</table>
</body>
</html>