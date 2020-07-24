<!-- Include Header -->
<?php include_once getcwd(). '\..\includes\header.inc.php'; ?>
            <!-- Jumbotron -->
            <div class="jumbotron custom-jumbotron">
                <!-- Page Heading -->
                <h1 class="display-3 custom-heading text-secondary">Find Jobs</h1>
                <!-- Categories Form -->
                <form
                    action="index.php"
                    method="GET"
                    class="text-left">
                        <div class="form-group">
                            <!-- Select Box -->
                            <select
                                name="cate"
                                id="cate"
                                class="custom-select">
                                    <option value="">Choose Category</option>
                                    <!-- Categories Loop -->
                                    <?php foreach($cates as $cate): ?>
                                        <option value="<?php echo $cate->id;?>">
                                            <?php echo $cate->name; ?>
                                        </option>
                                    <?php endforeach; ?>
                                    <!-- /Categories Loop -->
                            </select>
                            <!-- /Select Box -->
                        </div>
                        <input
                            type="submit"
                            value="Search"
                            class="btn btn-success custom-btn" />
                </form>
                <!-- /Categories Form -->
            </div>
            <!-- /Jumbotron -->

            <div class="card border-primary mb-3">
                <div class="card-header">
                    <h3 class="card-title text-primary jobs-header"><?php echo $title; ?></h3>
                </div>
                <div class="card-body">
                    <!-- Jobs Loop -->
                    <?php foreach($jobs as $job) :?>
                        <!-- Grid Row -->
                        <div class="row marketing custom-marketing">
                            <!-- Grid Col -->
                            <div class="col-md-10">
                                <!-- Job Headding -->
                                <h4 class="card-subtitle mb-2 text-muted"><?php echo $job->title;?></h4>
                                <!-- Job Description -->
                                <p class="text-primary"><?php echo $job->description;?></p>
                            </div>
                            <!-- /Grid Col -->
                            <!-- /Grid Col -->
                            <div class="col-md-2">
                                <a
                                    class="btn btn-secondary custom-btn"
                                    href="job.php?id=<?php echo $job->id; ?>">View</a>
                            </div>
                            <!-- /Grid Col -->
                        </div>
                        <!-- /Grid Row -->
                        <div class="border-top my-3"></div>
                    <?php endforeach;?>
                    <!-- /Jobs Loop -->
                </div>
            </div>
<!-- Include Footer -->
<?php include_once getcwd(). '\..\includes\footer.inc.php'; ?>