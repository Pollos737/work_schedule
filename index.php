<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Work Schedule</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        #form-style {
            width: 80%;
            height: 500px;
            margin: auto;
        }
    </style>
</head>
<body>
    <main class="container-fluid">
        <div id="form-style">
            <form method="post" action="work_schedule.php" class="form-horizontal">
                <?php
                    include 'common_functions.php';
                    $output = '';
                    $daysOfWeek = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
                    $datesOfCurrentWeek = getDaysOfCurrentWeek();
                    $form = createForm($datesOfCurrentWeek, $daysOfWeek);
                    echo $form;
                ?>
                <button type="submit" class="btn btn-primary">Submit Here Princess</button>
            </form>
        </div>
    </main>
</body>
</html>