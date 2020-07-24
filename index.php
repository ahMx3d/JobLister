<?php include_once 'configs\init.php'; ?>

<?php
    $job        = new Job;                                            // Database Job Object.
    $template   = new Template('views\frontpage.php');               // Front Page Template Object.
    $cate_id    = isset($_GET['cate'])?$_GET['cate']:null;          // Category Variable.


    if ($cate_id) {
        $template->title = $job->getCate($cate_id)->name. ' Jobs:';
        $template->jobs = $job->getJobByCate($cate_id);        // Template Variable With Database Jobs By Category.
    } else {
        $template->title = 'Latest Jobs:';                   // Template Object Title Variable Key For Template Array.
        $template->jobs = $job->getAllJobs();               // Template Varaible With Database Jobs.
    }
    
    $template->cates = $job->getAllCates();              // Template Varaible With Database Categories.
    echo $template;                                     // Display Template Object Outputs.
    