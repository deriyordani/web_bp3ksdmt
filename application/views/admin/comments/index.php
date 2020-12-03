<link href="<?php echo base_url() ?>css/pagination.css" rel="stylesheet" />
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
		<span><i class="icon-newspaper"> List comments</i></span>
	</div>
	<div class="mws-panel-body no-padding">
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
			url: "<?php echo base_url() ?>admin/comments/pagination",
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
