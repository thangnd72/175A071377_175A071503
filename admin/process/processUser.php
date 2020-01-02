<?php

    session_start();

    require('../../mysqli_connect.php');
    if(!$conn) {
        die("Connect failed");
    } else {
        $output = '';
                $output .= '<table class="table table-hover text-center" id="showUser">
                <thead>
                    <tr>
                        <th scope="col">User ID</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Job</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>';

                $sql = "SELECT * FROM Users ORDER BY userID ASC LIMIT 15";
                $users = mysqli_query($conn, $sql);
                while($rowUser = mysqli_fetch_array($users)) {
                    $output .= '<tr>
                    <td>'.$rowUser['userID'].'</td>
                    <td>'.$rowUser['userName'].'</td>
                    <td>'.$rowUser['phone'].'</td>
                    <td>'.$rowUser['contact'].'</td>
                    <td>'.$rowUser['job'].'</td>
                    <td class="d-flex justify-content-end">
                        <a href="#"><button type="button" class="btn btn-outline-secondary mr-2"><i class="fas fa-info"></i></button></a>
                        <a href="#"><button type="button" class="btn btn-outline-info mr-2" data-toggle="modal" data-target="#editUser" data-user="'.$rowUser['userID'].'" id="editUserBtn" ><i class="fas fa-edit"></i></button></a>
                        <a href="#"><button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#confirm-delete" data-user="'.$rowUser['userID'].'" id ="deleteUserBtn"><i class="fas fa-trash-alt"></i></button></a>
                    </td>
                </tr>';
                }
            echo $output;
    }
?>
