<link href="<?php echo base_url() ?>css/pagination.css" rel="stylesheet" />
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
		<span><i class="icon-newspaper"> Peta Sebaran ATM</i></span>
	</div>
	<div class="mws-panel-toolbar">
		<div class="btn-toolbar">
			<div class="btn-group">
				<a href="<?php echo base_url()?>admin/peta_atm/add" class="btn"><i class="icol-add"></i> Add</a>
			</div>
		</div>
	</div>
	<div class="mws-panel-body no-padding">
		<div id="jendelainfo">
        <div class="dialog-content">
            <div id="dialog-message">
              <p align="center">
                <span id="teksjenis"></span><br><br>
              </p>
              <span>Lokasi : </span><span id="teksjudul"></span><br>
              <span>Alamat : </span><span id="tekslokasi"></span><br>
              <span>Keterangan : </span><span id="teksdes"></span><br>
            </div>
            <a style="cursor:pointer" id="tutup" onClick="close_deskripsi()" class="button">Close</a>
        </div>
    </div>


    <div id="wp_petaku"><div id="petaku" style="height:500px"></div></div>
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
			url: "<?php echo base_url() ?>admin/peta_atm/pagination",
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
