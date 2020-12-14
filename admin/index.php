<?php

// This is the adminstrative home page.
// This script is created in Chapter 11.

// Require the configuration before any PHP code as configuration controls error reporting.
require ('../includes/config.inc.php');

// Set the page title and include the header:
$page_title = 'Administration';
include ('./includes/header.html');
// The header file begins the session.
?>
<h3>You have logged into the Admin Site</h3>

<?php include ('./includes/footer.html'); ?>
