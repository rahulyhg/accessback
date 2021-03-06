<div id="page-title">
<a href="<?php echo site_url("site/vieworderproduct"); ?>" class="btn btn-primary btn-labeled fa fa-arrow-left margined pull-right">Back</a>
<h1 class="page-header text-overflow">Create Order Product </h1>
</div>
<div id="page-content">
<div class="row">
<div class="col-lg-12">
<section class="panel">
<div class="panel-heading">
<h3 class="panel-title">
Create orderproduct </h3>
</div>
<div class="panel-body">
<form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/createorderproductsubmit");?>' enctype= 'multipart/form-data'>
<div class="panel-body">
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Product</label>
<div class="col-sm-4">
<?php echo form_dropdown("product",$product,set_value('product'),"class='chzn-select form-control'");?>
</div>
</div>
<div class=" form-group" style="display:none">
<label class="col-sm-2 control-label" for="normal-field">Order</label>
<div class="col-sm-4">
<?php echo form_dropdown("order",$order,set_value('order',$this->input->get('id')),"class='chzn-select form-control'");?>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Quantity</label>
<div class="col-sm-4">
<input type="text" id="normal-field" class="form-control" name="quantity" value='<?php echo set_value('quantity');?>'>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Price</label>
<div class="col-sm-4">
<input type="text" id="normal-field" class="form-control" name="price" value='<?php echo set_value('price');?>'>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">&nbsp;</label>
<div class="col-sm-4">
<button type="submit" class="btn btn-primary">Save</button>
<a href="<?php echo site_url("site/vieworderproduct?id=").$this->input->get("id"); ?>" class="btn btn-secondary">Cancel</a>
</div>
</div>
</form>
</div>
</section>
</div>
</div>
</div>
