<h1>List Users</h1>
<?php 
    $sql = "SELECT * FROM users";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if ($qtd > 0){

        echo "<table class = 'table table-hover table-striped table-bordered'>";
        echo "<tr>";
            echo "<th>#</th>";
            echo "<th>#Name</th>";
            echo "<th>E-mail</th>";
            echo "<th>Date of birth</th>";
            echo "<th>Actions</th>";
        echo "</tr>";

        while($row = $res->fetch_object()){
        echo "<tr>";
            echo "<td>".$row->id."</td>";
            echo "<td>".$row->name."</td>";
            echo "<td>".$row->email."</td>";
            echo "<td>".$row->date."</td>";
            echo"<td>
                <button onclick = \"location.href='?page=edit&id=".$row->id."'\" class='btn btn-success'>Edit</button>

                <button onclick = \"if(confirm('Delete user?')){location.href='?page=save&action=delete&id=".$row->id."'}else{false;}\"   class='btn btn-danger'>Delete</button>
                </td>";
        echo "</tr>";
        }}
        else{
            echo "<p class = 'alert alert-danger'> Did not find results! </p>";

        }
?>