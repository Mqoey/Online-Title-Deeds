<?php include "includes/header.php"; ?>
<?php
$query ="SELECT * FROM tbl_deeds";
$statement = $db->prepare($query);
$statement->execute();
$count= $statement -> rowCount();
$result = $statement->fetchAll();
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-success">
                <div class="panel panel-heading">
                    <h3>Title Deeds Management</h3>
                </div>
                <div class="panel panel-body">
                    <table id="all_deeds" class="table table-striped table-bordered" >
                        <thead>
                            <tr>
                                <th>Deed Number</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Id Number</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Province</th>
                                <th>Status</th>
                                <th style:align="center">Action</th>
                            </tr>
                        </thead>
                        <tbody class="search_into">
                        <?php foreach($result as $row) : ?>
                            <tr>
                            <?php
                                    $query ="SELECT * FROM tbl_deeds where deed_number=".$row['deed_number'];
                                    $statement = $db->prepare($query);
                                    $statement->execute();
                                    $count= $statement -> rowCount();
                                    $result = $statement->fetchAll();

                                     $deed_number=$result[0]['deed_number'];
                                ?>
                                <td><?php echo $deed_number ?></td>
                                <td><?php echo $row['first_name'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['id_number'] ?></td>
                                <td><?php echo $row['phone'] ?></td>
                                <td><?php echo $row['address'] ?></td>
                                <td><?php echo $row['province'] ?></td>
                                
                                <?php 
                                        if($row['status']==1){
                                            echo "<td><a href='' class='badge badge-success'>Sold</a></td>";
                                        }else{
                                            echo "<td><a href='' class='badge badge-warning'>Not Sold</a></td>";
                                        } 
                                    ?>

<td>
                                        <a href="edit_emp.php?deed_number=<?php echo $row['deed_number'] ?>" class="badge badge-primary">Edit</a>
                                        <a href="delete_emp.php?deed_number=<?php echo $row['deed_number'] ?>" class="badge badge-danger">Delete</a>
                                        <?php
                                            if($row['status']==1){
                                                echo '<a href="activate_emp.php?deed_number='.$row['deed_number'].'" class="badge badge-warning">To not sold</a>';
                                            }else{
                                                echo '<a href="activate_emp.php?deed_number='.$row['deed_number'].'" class="badge badge-success">To sold</a>';
                                            } 
                                            
                                        ?>
                                    </td>
                            </tr>
                        <?php endforeach; ?>         
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "includes/footer.php"; ?>