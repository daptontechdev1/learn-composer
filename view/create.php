<?php
require('includes/header.php');

use App\Controller\ManController;

$manObj = new ManController();

// Insert Record in customer table
if(isset($_POST['submit'])) {
    $manObj->insertData($_POST);
}
?>
<div class="container">
    <form method="POST">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" placeholder="Enter name" required="">
        </div>
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" name="email" placeholder="Enter email" required="">
        </div>
    </form>
</div>
<?php
require('includes/footer.php');
?>