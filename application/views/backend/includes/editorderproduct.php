<section class="panel">
<header class="panel-heading">
<h3 class="panel-title">Edit Order product </h3>
</header>
<div class="panel-body">
<form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/editorderproductsubmit");?>' enctype= 'multipart/form-data'>
<input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Product</label>
<div class="col-sm-4">
<?php echo form_dropdown("product",$product,set_value('product',$before->product),"class='chzn-select form-control'");?>
</div>
</div>
<div class=" form-group" style="display:none">
<label class="col-sm-2 control-label" for="normal-field">Order</label>
<div class="col-sm-4">
<?php echo form_dropdown("order",$order,set_value('order',$before->order),"class='chzn-select form-control'");?>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Quantity</label>
<div class="col-sm-4">
<input type="text" id="normal-field" class="form-control" name="quantity" value='<?php echo set_value('quantity',$before->quantity);?>'>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Price</label>
<div class="col-sm-4">
<input type="text" id="normal-field" class="form-control" name="price" value='<?php echo set_value('price',$before->price);?>'>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">&nbsp;</label>
<div class="col-sm-4">
<button type="submit" class="btn btn-primary">Save</button>
<a href='<?php echo site_url("site/vieworderproduct?id=").$this->input->get("id"); ?>' class='btn btn-secondary'>Cancel</a>
</div>
</div>
</form>
</div>
</section>
