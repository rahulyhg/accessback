<div id="page-title">
<a class="btn btn-primary btn-labeled fa fa-plus margined pull-right" href="<?php echo site_url("site/createstoreprice?id=").$this->input->get("id"); ?>">Create</a>
<h1 class="page-header text-overflow">Store Price Details </h1>
</div>
<div id="page-content">
<div class="row">
<div class="col-lg-12">
<div class="panel drawchintantable">
<?php $this->chintantable->createsearch("Store Price List");?>
<div class="fixed-table-container">
<div class="fixed-table-body">
<table class="table table-hover" id="" cellpadding="0" cellspacing="0">
<thead>
<tr>
<th data-field="id">ID</th>
<th data-field="productid">Product Id</th>
<th data-field="price">Price</th>
</tr>
</thead>
<tbody>
</tbody>
</table>
</div>
<div class="fixed-table-pagination" style="display: block;">
<div class="pull-left pagination-detail">
<?php $this->chintantable->createpagination();?>
</div>
</div>
</div>
</div>
</div>
</div>
<script>
function drawtable(resultrow) {
return "<tr><td>" + resultrow.id + "</td><td>" + resultrow.productid + "</td><td>" + resultrow.price + "</td><td><a class='btn btn-primary btn-xs' href='<?php echo site_url('site/editstoreprice?id=');?>"+resultrow.id+"'><i class='icon-pencil'></i></a><a class='btn btn-danger btn-xs' onclick=return confirm(\"Are you sure you want to delete?\") href='<?php echo site_url('site/deletestoreprice?id='); ?>"+resultrow.id+"&storeid="+resultrow.id+"'><i class='icon-trash '></i></a></td></tr>";
}
generatejquery("<?php echo $base_url;?>");
</script>
</div>
