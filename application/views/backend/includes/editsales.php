<section class="panel">
<header class="panel-heading">
<h3 class="panel-title">Sales Details </h3>
</header>
<div class="panel-body">
<form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/editsalessubmit");?>' enctype= 'multipart/form-data'>
<input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Name</label>
<div class="col-sm-4">
<input type="text" id="normal-field" class="form-control" name="name" value='<?php echo set_value('name',$before->name);?>'>
</div>
</div>
<div class=" form-group">
  <label class="col-sm-2 control-label" for="normal-field">Image</label>
  <div class="col-sm-4">
  <input type="file" id="normal-field" class="form-control" name="image" value="<?php echo set_value('image',$before->image);?>">
  <?php if($before->image == "")
     { }
     else
     { ?>
      <img src="<?php echo base_url('uploads')."/".$before->image; ?>" width="140px" height="140px">
    <?php }
  ?>
  </div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Email</label>
<div class="col-sm-4">
<input type="email" id="normal-field" class="form-control" name="email" value='<?php echo set_value('email',$before->email);?>'>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Password</label>
<div class="col-sm-4">
<input type="password" id="normal-field" class="form-control" name="password" value='<?php echo set_value('password',$before->password);?>'>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Creation Date</label>
<div class="col-sm-4">
<input type="text" id="normal-field" class="form-control" name="creationdate" value='<?php echo set_value('creationdate',$before->creationdate);?>'>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Modification Date</label>
<div class="col-sm-4">
<input type="text" id="normal-field" class="form-control" name="modificationdate" value='<?php echo set_value('modificationdate',$before->modificationdate);?>'>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">&nbsp;</label>
<div class="col-sm-4">
<button type="submit" class="btn btn-primary">Save</button>
<a href='<?php echo site_url("site/viewsales"); ?>' class='btn btn-secondary'>Cancel</a>
</div>
</div>
</form>
</div>
</section>
