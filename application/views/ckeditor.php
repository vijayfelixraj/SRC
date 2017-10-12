<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//echo $this->ckeditor->editor("textarea name","default textarea value");
?>

<form action="ckeditor/create" method="post" accept="mutiple">
    <textarea name="editor1" id="editor1" rows="10" cols="80">
        This is my textarea to be replaced with CKEditor.
    </textarea>

    <input type="submit" value="Submit">
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
    </script>
</form>
