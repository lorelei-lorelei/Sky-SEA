<!DOCTYPE HTML>

<form action="upload.php" method="post">
  <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
  <label for "file_upload">Upload a file:</label>
    <input name="file_upload" type="file">
<button type="submit">Upload</button>
</form>

<?php
if($filename = isset($_FILES->name)){
echo $filename;
}
?>
