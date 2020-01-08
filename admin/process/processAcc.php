<?php

    session_start();

    require('../../mysqli_connect.php');
    if(!$conn) {
        die("Connect failed");
    } else {
        $output = '';
                $output .= '<table class="table table-hover text-center" id="showAcc">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Level</th>
                        <th scope="col">Date Created</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>';

                $sql = "SELECT * FROM Account ORDER BY accID ASC LIMIT 15";
                $users = mysqli_query($conn, $sql);
                while($rowAcc = mysqli_fetch_array($users)) {
                    $output .= '<tr>
                    <td>'.$rowAcc['accID'].'</td>
                    <td>'.$rowAcc['firstName'].' '.$rowAcc['lastName'].'</td>
                    <td>'.$rowAcc['email'].'</td>
                    <td>'.$rowAcc['level'].'</td>
                    <td>'.$rowAcc['created'].'</td>
                    <td class="d-flex justify-content-end">
                        <a href="#"><button type="button" class="btn btn-outline-secondary mr-2"><i class="fas fa-info"></i></button></a>
                        <a href="#"><button type="button" class="btn btn-outline-info mr-2" data-toggle="modal" data-target="#editUser" data-acc="'.$rowAcc['accID'].'" id="editAccBtn" ><i class="fas fa-edit"></i></button></a>
                        <a href="#"><button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#confirm-delete" data-acc="'.$rowAcc['accID'].'" id ="deleteAccBtn"><i class="fas fa-trash-alt"></i></button></a>
                    </td>
                </tr>';
                }
            echo $output;
    }
?>
