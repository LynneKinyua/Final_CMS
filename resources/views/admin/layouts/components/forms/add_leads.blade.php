<form action="{{ url('admin/adminleads/store') }}" method="POST" id="new-user-form">      
    @csrf       
    <div class="form-group">
        <label for="name">Client Name:</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email">
    </div>
    <div class="form-group">
        <label for="phone">Phone No.:</label>
        <input type="text" class="form-control" name="phone">
    </div>
    <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" class="form-control" name="address">
    </div>
    <div class="form-group">
        <label for="city">City</label>
        <input type="text" class="form-control" name="city">
    </div>
    <div class="form-group">
        <label for="country">Country</label>
        <input type="text" class="form-control" name="country">
    </div>
    <div class="form-group">
        <label for="notes">Notes</label>
        <input type="textarea" class="form-control" name="notes">
    </div>

    
</form>