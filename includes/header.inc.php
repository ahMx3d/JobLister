<!doctype html>
<html lang="en">
    <head>
        <title><?php echo SITE_TITLE; ?></title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link
            rel="stylesheet"
            href="layouts\css\bootstrap.min.css">
        <link
            rel="stylesheet"
            href="layouts\css\style.css">
    </head>
    <body>
        <!-- container -->
        <div class="container">
            <div class="header clearfix">
                <nav>
                    <ul class="nav nav-pills float-right">
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                href="create.php">Create Listing</a>
                        </li>
                    </ul>
                </nav>
                <h3 class="text-muted proj-name"><?php echo SITE_TITLE; ?></h3>
            </div>
            <!-- Error/Success Messages -->
            <?php displayMsg(); ?>