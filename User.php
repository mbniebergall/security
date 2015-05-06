<?php

require_once __DIR__ . '/Db.php';
require_once __DIR__ . '/Authenticate.php';

if (empty($_GET['id'])) {
    echo 'Missing parameter "id"';
    return;
}

require_once __DIR__ . '/Db.php';

$query = $dbService->query(
    "SELECT *
FROM user
WHERE id = " . $_GET['id'] . "
ORDER BY username ASC"
);

echo '<table border="1">
<tr>
<th>ID</th>
<th>Username</th>
<th>Enabled</th>
<th>Password</th>
</tr>';
$headers = true;
while ($row = $query->fetch_assoc()) {
    echo '<tr>';
    foreach ($row as $key => $value) {
        echo '<td>' . $value . '</td>';
    }
    echo '</tr>';
}
echo '</ul></table>';
