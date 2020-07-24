<?php include_once 'configs\init.php'; ?>

<?php
    $job        = new Job;                  // Database Job Object.

    if (isset($_POST['submit'])) {
        // Create Data Array
        $data = array();
        $data['comp'] = $_POST['comp'];     // Company Name Input Value.
        $data['cate'] = $_POST['cate'];     // Category ID Input Value.
        $data['titl'] = $_POST['titl'];     // Title Name Input Value.
        $data['desc'] = $_POST['desc'];     // Description Input Value.
        $data['loca'] = $_POST['loca'];     // Location Input Value.
        $data['sala'] = $_POST['sala'];     // Salary Input Value.
        $data['name'] = $_POST['name'];     // Contact Name Input Value.
        $data['mail'] = $_POST['mail'];     // Contact Email Input Value.

        if ($job->submit($data)) {          // Data Submite Check.
            redirect(                       // Home Redirection.
                'index.php',                // Redirection Location.
                'Job has been listed',      // Redirection Message.
                'success'                   // Redirection Status.
            );
        } else {                            // Data Not Submited Check.
            redirect(                       // Home Redirection
                'index.php',                // Redirection Location.
                'Something Went Wrong',     // Redirection Message.
                'error'                     // Redirection Status.
            );
        }
        
    }

    $template   = new Template('views\job-create.php');              // Create Job Template Object.

    
    $template->cates = $job->getAllCates();              // Template Varaible With Database Categories.
    echo $template;                                     // Display Template Object Outputs.
    