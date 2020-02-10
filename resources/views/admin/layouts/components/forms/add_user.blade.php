<form action="{{ url('admin/users/store') }}" method="POST" id="new-user-form">      
    @csrf       
    <div class="form-group">
        <label for="name">New User Name:</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label for="email">New User Email</label>
        <input type="text" class="form-control" name="email">
    </div>
    <div class="form-group">
        <label for="roles">Select New User Role:</label>
        <select name="roles" class="form-control">
            <option value="user" default>User</option>
            <option value="admin" default>Admin</option>
        </select>
     </div>
    <div class="form-group">
        <label for="password">Enter New User Temporary Password</label>
        <input type="password" class="form-control" name="password">
    </div>
    <div class="form-group">
        <label for="confirm_password">Confirm New User Temporary Password</label>
        <input type="password" class="form-control" name="confirm_password">
    </div>
    <button class="btn btn-block btn-primary">Submit </button>

 </form>
   
