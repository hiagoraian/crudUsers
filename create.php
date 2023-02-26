<h1>Create User</h1>
<form action="?page=save" method="POST">
    <input type="hidden" name="action" value="create">
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control">
    </div>
    <div class="mb-3">
        <label>Date of birth</label>
        <input type="date" name="date" class="form-control">
    </div>
    <div class="mb-3">
        <button class="btn btn-primary">Send</button>
    </div>
</form>