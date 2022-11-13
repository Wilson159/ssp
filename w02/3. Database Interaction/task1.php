<?php
// SQL Connection
$conn = mysqli_connect('localhost', 'root', '', 'w02');
if (!$conn) { die('Connection Failed:' . mysqli_connect_error()); };


// SQL Queries
$sql_query1 = "INSERT INTO student (surname, forename, address, telephone, date_of_birth)
                    VALUES ('PATEL', 'ALISHA', '28 Honiton Road, Churchinford, TA3 7RF', '07771587204', '1998-05-07');";

$sql_query2 = "INSERT INTO student (surname, forename, address, telephone, date_of_birth)
                    VALUES ('BARKER', 'AIDAN', '40 North Promenade, Dover, CT16 4HP', '07984452776', '1997-06-08');";

$sql_query3 = "INSERT INTO student (surname, forename, address, telephone, date_of_birth)
                    VALUES ('ROBSON', 'ELLA', '83 Osborne Road, King\'s Somborne', '07850258570', '1999-12-17');";

$sql_query4 = "INSERT INTO student (surname, forename, address, telephone, date_of_birth)
                    VALUES ('BURGESS', 'SHANNON', '89 Bootham Terrace, Rawdon, LS19 4NY', '07005372432', '1996-09-17');";

$sql_query5 = "INSERT INTO student (surname, forename, address, telephone, date_of_birth)
                    VALUES ('METCALFE', 'BEN', '8 Mounthoolie Lane, Sutton, LN5 6AG', '07943593198', '1997-11-16');";


// Testing SQL Queries
if (mysqli_query($conn, $sql_query1)) { echo "Successful data entry!\n"; }
if (mysqli_query($conn, $sql_query2)) { echo "Successful data entry!\n"; }
if (mysqli_query($conn, $sql_query3)) { echo "Successful data entry!\n"; }
if (mysqli_query($conn, $sql_query4)) { echo "Successful data entry!\n"; }
if (mysqli_query($conn, $sql_query5)) { echo "Successful data entry!\n"; }

?>