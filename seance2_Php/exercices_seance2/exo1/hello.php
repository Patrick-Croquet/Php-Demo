<?php
if (isset($_POST['name']) && $_POST['name'] !='') {
    echo "<h3>Bonjour " . $_POST['name'] ." !</h3>";
}

?>