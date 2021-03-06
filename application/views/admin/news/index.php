<link href="<?php echo base_url() ?>css/pagination.css" rel="stylesheet" />

<div class="mws-panel grid_8">
	<div class="mws-panel-header">
		<span><i class="icon-newspaper"> List News</i></span>
	</div>
	<div class="mws-panel-toolbar">
		<div class="btn-toolbar">
			<div class="btn-group">
				<a href="<?php echo base_url()?>admin/news/add" class="btn"><i class="icol-add"></i> Add</a>
			</div>
		</div>
	</div>
	<div class="mws-panel-body no-padding">
		<div style="margin-left:10px;margin-bottom:10px;">
			<form method="post">
			<br><label class="mws-form-label">Filter Kategori</label>
			<div class="mws-form-item">
				<?php $kategories = $this->maluku_lib->kategori_news2(); ?>
				<?php echo form_dropdown('id_kategori_sub', $kategories, '', 'class="small"'); ?> <?php echo form_submit('submit', 'Filter', 'class="btn btn-danger"'); ?><br />
			</div>
			</form>
		</div>
		<div id="content">
			<div class="data"></div>
			<div class="pagination"></div>
		</div>
		<br />
	</div>
</div>


<script>
$(document).ready(function() {
	function loading_show() {
		$('#loading').html("<img src='images/loading.gif'/>").fadeIn('fast');
	}
	function loading_hide() {
		$('#loading').fadeOut('fast');
	}
	function loadData(page) {
		loading_show();
		$.ajax
		({
			type: "get",

			<?php if($this->input->post('id_kategori_sub')){ ?>
			url: "<?php echo base_url() ?>admin/news/pagination/" + <?php echo $this->input->post('id_kategori_sub'); ?>,
			<?php } else { ?>
			url: "<?php echo base_url() ?>admin/news/pagination",
			<?php } ?>

			data: "page=" + page, 
			success: function(msg)
			{
				$("#content").ajaxComplete(function(event, request, settings)
				{
					loading_hide();
					$("#content").html(msg);
				});
			}
		});
	}
        loadData(1);  // For first time page load default results
        $('#content .pagination li.active').live('click', function() {
        	var page = $(this).attr('p');
        	loadData(page);

        });
        $('#go_btn').live('click', function() {
        	var page = parseInt($('.goto').val());
        	var no_of_pages = parseInt($('.total').attr('a'));
        	if (page != 0 && page <= no_of_pages) {
        		loadData(page);
        	} else {
        		alert('Enter a PAGE between 1 and ' + no_of_pages);
        		$('.goto').val("").focus();
        		return false;
        	}

        });
    });

</script>
