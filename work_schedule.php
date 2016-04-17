<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Work Schedule</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <table class="table table-striped">
        <thead>
            <tr>
                <?php
                    include 'common_functions.php';
                    $output = '';
                    $daysOfWeek = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
                    $datesOfCurrentWeek = getDaysOfCurrentWeek();
                    for($i = 0; $i < count($daysOfWeek); $i++){
                        $output .= '<th>'.$daysOfWeek[$i].'</th>';
                    }
                    echo $output;
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
                $startTime = $_POST['Monday_start'];
                echo '<tr><td>'.$startTime.'</td></tr>'
            ?>
        </tbody>
    </table>
</body>
</html>