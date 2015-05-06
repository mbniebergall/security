<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Data: <input type="text" name="data">
    <input type="submit" value="Submit">
</form>

<?php

if (!empty($_POST['data'])) {
    echo '<div>' . $_POST['data'] . '</div>';
}
