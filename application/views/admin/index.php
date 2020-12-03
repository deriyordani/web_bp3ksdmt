<!-- Panels Start -->

<!-- <div class="mws-panel grid_5">
	<div class="mws-panel-header">
		<span><i class="icon-graph"></i> Charts</span>
	</div>
	<div class="mws-panel-body">
		<div id="mws-dashboard-chart" style="height: 222px;"></div>
	</div>
</div> -->

<div class="mws-panel grid_8">
	<div class="mws-panel-header">
		<span><i class="icon-book"></i> Website Summary</span>
	</div>
	<div class="mws-panel-body no-padding">
		<ul class="mws-summary clearfix">
			<li>
				<span class="key"><i class="icon-support"></i> Hits Counter</span>
				<span class="val">
					<span class="text-nowrap"><?php echo $hits ?></span>
				</span>
			</li>
		</ul>
	</div>
</div>


<script src="<?php echo base_url()?>plugins/flot/jquery.flot.min.js"></script>
<script src="<?php echo base_url()?>plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url()?>plugins/flot/plugins/jquery.flot.pie.min.js"></script>
<script src="<?php echo base_url()?>plugins/flot/plugins/jquery.flot.stack.min.js"></script>
<script src="<?php echo base_url()?>plugins/flot/plugins/jquery.flot.resize.min.js"></script>