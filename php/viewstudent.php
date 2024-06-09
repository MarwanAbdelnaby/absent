<?php
function getstudents ($year){
    require "database.php";
    $query = mysqli_query($connection,"SELECT * FROM `students` WHERE `grade` = $year");
    while ($row = mysqli_fetch_array(($query))){
        echo "
            <tr>
                            <td>".$row["name"]."</td>
                            <td>0".$row["snumber"]."</td>
                            <td>0".$row["pnumber"]."</td>
                            <td>".$row["sdate"]."</td>
                            <td>".$row["1st"]."</td>
                            <td>".$row["2nd"]."</td>
                            <td>".$row["3rd"]."</td>
                            <td>".$row["4th"]."</td>
                            <td>".$row["5th"]."</td>
                            <td>".$row["6th"]."</td>
                            <td>".$row["7th"]."</td>
                            <td>
                                <a href='edit.php?id=".$row['id']."' class='btn btn-success'><i class='fa fa-edit'></i> Edit</a>
                                <a href='php/deletestudent.php?id=".$row['id']."' class='btn btn-danger confirm'><i class='fa fa-times'></i> Delete</a>
                            </td>
                        </tr>";
    }
}

