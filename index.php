<?php
require('../../config.php');
require_once($CFG->dirroot.'/login/lib.php');

$PAGE->set_context(context_system::instance());
$PAGE->set_url(new moodle_url('/local/mycustomlogin/index.php'));
$PAGE->set_title(get_string('login'));
$PAGE->set_heading(get_string('login'));
$PAGE->set_pagelayout('login');


// Render the login form.
//echo $OUTPUT->header();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Login</title>
    <link rel="stylesheet" href="path/to/custom-login.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $CFG->wwwroot; ?>/theme/academi/style/chankana.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
<?php
    echo $OUTPUT->render_from_template('local_mycustomlogin/loginform', array());
//echo $OUTPUT->footer();
?>
<script src="<?php echo $CFG->wwwroot; ?>/theme/academi/scripts/chankana.js"></script>
</body>
</html>
