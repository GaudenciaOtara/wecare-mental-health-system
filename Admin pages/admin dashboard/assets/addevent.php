<!-- Pre-loader start -->
<!-- <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

<?php
include("../../../Functions/connect.php");
// $day = $_POST['day'];
// $year = $_POST['year'];
// $month = $_POST['month'];
$event_datetime = $_POST['event_datetime'];
$event_title = $_POST['event_title'];
$event_description = $_POST['event_description'];
// echo ($event_datetime . " " . $event_title . " " . $event_description);

// prepare the SQL statement to insert the values into the database
$stmt = $conn->prepare("INSERT INTO event_table (event_datetime, event_title, event_description) VALUES (?, ?, ?)");

// bind the values to the SQL statement
$stmt->bind_param("sss", $event_datetime, $event_title, $event_description);

// execute the SQL statement
if ($stmt->execute() === TRUE) {
    echo "New record created successfully";
    echo (" <script>
                location.replace('../index.php');
            </script>");



} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
<?php
// // establish database connection
// $conn = new mysqli("localhost", "lloyd", "1234", "wecare");

// // select all strings with their datetime values from the database
// $sql = "SELECT string, datetime_value FROM table_name";

// $result = $conn->query($sql);

// // create an array to store the datetime values
// $datetime_values = array();

// // loop through the result set and add the datetime values to the array
// while ($row = $result->fetch_assoc()) {
//     $datetime_values[] = $row['datetime_value'];
// }

// // sort the datetime values in ascending order
// sort($datetime_values);

// // loop through the sorted datetime values and retrieve the corresponding strings
// foreach ($datetime_values as $datetime) {
//     $sql = "SELECT string FROM table_name WHERE datetime_value = '$datetime'";
//     $result = $conn->query($sql);
//     $row = $result->fetch_assoc();
//     $string = $row['string'];

//     // do something with the retrieved string, such as printing it to the screen
//     echo $string . "<br>";
// }
?>