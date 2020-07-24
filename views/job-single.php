<!-- Include Header -->
<?php include_once getcwd() . '\..\includes\header.inc.php'; ?>
<div class="card border-info bg-light mb-3">
    <h3 class="card-header text-primary custom-heading">
        <?php echo $job->title; ?>
    </h3>
    <div class="card-body">
        <h5 class="card-title text-secondary">
            <span class="badge">Posted By:</span>
            <span class="text-info custom-info">
                <?php echo $job->contact_user; ?>
            </span>
        </h5>
        <p class="card-text lead text-primary">
            <?php echo $job->description; ?>
        </p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <strong class="text-dark">Company Name: </strong>
            <span class="text-info">
                <?php echo $job->company; ?>
            </span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <strong class="text-dark">Position Salary: </strong>
            <span class="text-info">
                <?php echo $job->salary; ?>
            </span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <strong class="text-dark">Work Location: </strong>
            <span class="text-info">
                <?php echo $job->location; ?>
            </span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <strong class="text-dark">Contact Email: </strong>
            <span class="text-info">
                <?php echo $job->contact_email; ?>
            </span>
        </li>
    </ul>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <a
                    href="index.php"
                    class="btn btn-primary">Go Back</a>
            </div>
            <div class="col-md-6 text-right">
                <a
                    href="edit.php?id=<?php echo $job->id; ?>"
                    class="btn btn-secondary">Edit</a>
                    <form
                        style="display: inline-block;"
                        action="job.php"
                        method="POST">
                            <input
                                type="hidden"
                                name="del-id"
                                id="del-id"
                                value="<?php echo $job->id; ?>" />
                            <input
                                type="submit"
                                class="btn btn-danger"
                                value="Delete" />
                    </form>
            </div>
        </div>
    </div>
    <div class="card-footer text-muted text-center">
        <strong>Posted At: </strong>
        <span class="text-info custom-info">
            <?php echo $job->post_date; ?>
        </span>
    </div>
</div>



<!-- Include Footer -->
<?php include_once getcwd() . '\..\includes\footer.inc.php'; ?>