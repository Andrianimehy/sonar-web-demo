<?php
if (!empty($_POST['name'])) {
    echo "Bonjour " . $_POST['name'];
} else {
    echo "Aucun nom fourni.";
}
?>
