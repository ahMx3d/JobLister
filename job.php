<?php include_once 'configs\init.php'; ?>

<?php
    $job        = new Job;                                            // Database Job Object.

    if (isset($_POST['del-id'])) {
        $delID = $_POST['del-id'];
        if ($job->delete($delID)) {
            redirect(
                'index.php',
                'Job Deleted',
                'success'
            );
        } else {
            redirect(
                'index.php',
                'Job Not Deleted',
                'error'
            );
        }
        
    }
    

    $template   = new Template('views\job-single.php');              // Single Job Template Object.
    $job_id     = isset($_GET['id'])?$_GET['id']:null;              // Job Variable.
    
    $template->job = $job->getJob($job_id);                       // Template Varaible With Database Job.
    echo $template;                                              // Display Template Object Outputs.
    