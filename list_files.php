<?php
$directory = "uploads/"; // Directory where files are stored
$files = array_diff(scandir($directory), array('..', '.'));

echo '<h2>Shared Files</h2>';
echo '<div class="file-list">';
foreach ($files as $file) {
    echo '<a href="' . $directory . $file . '" target="_blank">' . $file . '</a><br>';
}
echo '</div>';
?>
