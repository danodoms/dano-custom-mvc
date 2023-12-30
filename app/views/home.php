<html>
<head>
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>
<body>


<h1>DANO CUSTOM MVC</h1>
    <table>
        <?php foreach ($data['users'] as $user): ?>
            <tr>
                <?php foreach ($user as $key => $value): ?>
                    <td><?= htmlspecialchars($value) ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>
</body>