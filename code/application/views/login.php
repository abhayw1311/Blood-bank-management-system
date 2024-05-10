<div class="row mt-4 mb-4">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form action="<?php echo base_url('home/login') ?>" class="database_operation_form">
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="form-group">
            <button class="btn btn-info">Login</button>
        </div>
        </form>
    </div>
    <div class="col-md-4"></div>
</div>