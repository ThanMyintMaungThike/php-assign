<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>Filter name</td>
            <td>Filter ID</td>
        </tr>
        <?php
            foreach (filter_list() as $id => $filter) {
                echo '<tr><td>'. $filter .'</td> <td>' . filter_id($filter) . '</td></tr>' ;
            }
        ?>
    </table>
</body>
</html>