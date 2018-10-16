<?php
$db = mysqli_connect('192.168.1.150','judy','5dragons','Calendar')
or die('Error connecting to MySQL server.');

include('header.php')
?>

<div class="content">
<?php if (isset($success) && $success) { ?>
<h1>Thank you</h1>
<p>Your event has been submitted.</p>
<?php } else { ?>
<h1>Oops!</h1>
<p>Sorry, there was an error processing your event.</p>
<?php } ?>
</div>


<?php mysqli_close($db);
include('footer.php') ?>

