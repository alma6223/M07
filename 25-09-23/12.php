<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <select>
            <option value="dna">DNA</option>
            <option value="rna">RNA</option>
        </select>
        <input type="text" name="sequence">
        <input type="submit">
    </form>
    <ul>
        <?php
            function stats(string $sequence): array {
                $stats = [];
                for ($i = 0; $i < strlen($sequence); $i++) {
                    $stats[$sequence[$i]]['count'] += 1;
                    $stats[$sequence[$i]]['percent'] = ($stats[$sequence[$i]]['count'] * strlen($sequence)) / 100;
                }
                return $stats;
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $sequence = $_POST['sequence'];
                foreach(stats($sequence) as $key => $value) {
                    echo '<li>' . strtoupper($key) . ': ' . $value['count'] . ' (' . $value['percent'] . ')</li>';
                }
            }
        ?>
    </ul>
</body>
</html>