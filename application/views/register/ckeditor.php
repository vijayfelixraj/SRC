<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//echo $this->ckeditor->editor("textarea name","default textarea value");
?>
<h3><i class="fa fa-angle-right"></i>Registration Form</h3>
<!-- BASIC FORM ELELEMNTS -->
<div class="row mt">
  <div class="col-lg-12">
      <div class="form-panel">
          <h4 class="mb"><i class="fa fa-angle-right"></i>Registration Form</h4>
            <form action="ckeditor/create" method="post" accept="mutiple" class="form-horizontal style-form">
              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Fullname</label>
                  <div class="col-sm-10">
                    <input type="text" name="fullname" id="fullname">
                  </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="text" name="email" id="email">
                  </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Description</label>
                  <div class="col-sm-10">
                      <textarea name="editor1" id="editor1" class="form-control" rows="10" cols="80">
                          This is my textarea to be replaced with CKEditor.
                      </textarea>
                  </div>
              </div>
              <input type="submit" value="Submit">
              <script>
                  // Replace the <textarea id="editor1"> with a CKEditor
                  // instance, using default configuration.
                  CKEDITOR.replace('editor1');
              </script>
            </form>
      </div>
    </div>
</div>
