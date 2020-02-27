<form action="{{ url('admin/clients/store') }}" method="POST" id="new-client-form">      
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
        <label for="address">Status:</label>
        <input type="text" class="form-control" name="address">
    </div>
    <div class="form-group">
        <label for="city">Last Interaction</label>
        <input type="text" class="form-control" name="city">
    </div>
    <div class="form-group">
        <label for="country">Next Interaction</label>
        <input type="text" class="form-control" name="country">
    </div>
    <div class="form-group">
        <label for="notes">Source</label>
        <input type="textarea" class="form-control" name="notes">
    </div>

    
</form>