<h1>Edit User</h1>

<?php 
    $sql = "SELECT * FROM users WHERE   id = ".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=save" method="POST">
    <input type="hidden" name="action" value="edit">
    <input type="hidden" name="id" value="<?php echo $row->id; ?>">
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" value="<?php echo $row->name ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" value="<?php echo $row->email ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Date of birth</label>
        <input type="date" name="date" value="<?php echo $row->date ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button class="btn btn-primary">Send</button>
    </div>
</form>