<?php 
include('includes/header.php');
include('includes/banner.php');?>
<main>
    <h1>Database Error</h1>
    <p class="first_paragraph">There was an error connecting to the database.</p>
    <p>Review your database connection settings and try again</p>
    <p class="last_paragraph">Error message: <?php echo $error_message; ?></p>
</main>
<?php include('includes/footer.php'); ?>