<!-- Include Header -->
<?php include_once getcwd() . '\..\includes\header.inc.php'; ?>
<form
    action="edit.php?id=<?php echo $job->id; ?>"
    method="POST">
        <fieldset>
            <legend class="text-dark">Edit Job Listing</legend>
            <div class="form-group">
                <label for="comp">Company</label>
                <input
                    type="text"
                    class="form-control"
                    name="comp"
                    id="comp"
                    value="<?php echo $job->company; ?>"
                    placeholder="Enter Company Name" />
            </div>
            <div class="form-group">
                <label for="cate">Category</label>
                <select
                    name="cate"
                    id="cate"
                    class="custom-select">
                        <option value="">Choose Category Name</option>
                        <!-- Categories Loop -->
                        <?php foreach($cates as $cate): ?>
                            <?php if($job->cate_id === $cate->id):?>
                                <option
                                    value="<?php echo $cate->id;?>"
                                    selected>
                                        <?php echo $cate->name; ?>
                                </option>
                            <?php else:?>
                                <option value="<?php echo $cate->id;?>">
                                    <?php echo $cate->name; ?>
                                </option>
                            <?php endif;?>
                        <?php endforeach; ?>
                        <!-- /Categories Loop -->
                </select>
            </div>
            <div class="form-group">
                <label for="titl">Title</label>
                <input
                    type="text"
                    class="form-control"
                    name="titl"
                    id="titl"
                    value="<?php echo $job->title; ?>"
                    placeholder="Enter Job Title" />
            </div>
            <div class="form-group">
                <label for="desc">Description</label>
                <textarea
                    class="form-control"
                    name="desc"
                    id="desc"
                    rows="3"
                    placeholder="Enter Job Description"><?php echo $job->description; ?></textarea>
            </div>
            <div class="form-group">
                <label for="loca">Location</label>
                <input
                    type="text"
                    class="form-control"
                    name="loca"
                    id="loca"
                    value="<?php echo $job->location; ?>"
                    placeholder="Enter Working Location" />
            </div>
            <div class="form-group">
                <label for="sala">Salary</label>
                <input
                    type="text"
                    class="form-control"
                    name="sala"
                    id="sala"
                    value="<?php echo $job->salary; ?>"
                    placeholder="Enter Position Salary" />
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input
                    type="text"
                    class="form-control"
                    name="name"
                    id="name"
                    value="<?php echo $job->contact_user; ?>"
                    placeholder="Enter Contact Name" />
            </div>
            <div class="form-group">
                <label for="mail">Email</label>
                <input
                    type="email"
                    class="form-control"
                    name="mail"
                    id="mail"
                    value="<?php echo $job->contact_email; ?>"
                    placeholder="Enter Contact Email" />
            </div>
            <div class="form-group text-center">
                <input
                    type="submit"
                    name="submit"
                    id="submit"
                    value="Edit"
                    class="btn btn-dark btn-lg">
            </div>
        </fieldset>
</form>
<!-- Include Footer -->
<?php include_once getcwd() . '\..\includes\footer.inc.php'; ?>