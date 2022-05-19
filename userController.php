<?php

include('./dbcon.php');

if(isset($_POST["action"])){

    //Load data
    if($_POST["action"] == "Load"){

        $whereSQL = $orderSQL = '';
        $keywords = $_POST['keywords'];
        $sortBy   = $_POST['sortBy'];

        if(!empty($keywords)){
            $whereSQL = "WHERE name LIKE '%".$keywords."%'";
        }
        
        if(!empty($sortBy)){
            $orderSQL = " ORDER BY name ".$sortBy;
        }else{
            $orderSQL = " ORDER BY name ASC ";
        }

        if(!empty($sortBy) && $sortBy == "age"){
            $orderSQL = " ORDER BY age ASC";
        }

        $statement = $connect->prepare("SELECT * FROM employees $whereSQL $orderSQL");
        $statement->execute();
        $result = $statement->fetchAll();
        $output = '';
        $output .= '
        <table id="tech-companies-1" class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody>
        ';

        if(sizeof($result) > 0){
            
            foreach($result as $row){

                $output .= '
                <tr>
                    <td>'.$row["name"].'</td>
                    <td>'.$row['address'].'</td>
                    <td>'.$row['gender'].'</td>
                    <td>'.$row['age'].'</td>
                </tr>';
            }
        }else{
            $output .= '
                <tr>
                    <td align="center" class="alert alert-danger" colspan=4>No records found</td>
                </tr>';
        }

        $output .= '</tbody></table>';

        echo $output;

    }
}