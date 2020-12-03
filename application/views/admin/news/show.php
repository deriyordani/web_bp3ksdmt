
<script src="<?php echo base_url() ?>ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url() ?>ckeditor/adapters/jquery.js"></script>
<style>

#editable
{
	padding: 10px;
	float: left;
}
</style>


<?php $attributs = 'class="mws-form"'?>
<?php echo form_open_multipart('admin/news/update', $attributs) ?>

<div class="mws-panel grid_8">
	<div class="mws-panel-body no-padding">
		<div class="mws-panel-header">
			<span>Show news</span>
		</div>
		<?php foreach($news as $n): ?>
		<div class="mws-form-row">
			<label class="mws-form-label">Kategori</label>
			<div class="mws-form-item">
				<?php $kategories = $this->maluku_lib->kategori_news(); ?>
				<?php echo $kategories[$n->id_kategori_sub] ?><br />
			</div>
		</div>

		<?php if($n->url_gambar_news!=''){ ?>
		<div class="mws-form-row">
			<label class="mws-form-label">Image</label>
			<div class="mws-form-item">
				<img src="<?php echo base_url().$n->url_gambar_news?>">
			</div>
		</div>
		<?php } ?>
		
		<div class="mws-form-row">
			<label class="mws-form-label">Status</label>
			<div class="mws-form-item">
				<?php echo get_status_modul($n->status)?>
			</div>
		</div>
	<?php endforeach ?>
</div>
</div>

<div class="mws-panel grid_8">
	<div class="mws-panel-body no-padding">
		<div class="mws-panel-header">
			<span>Indonesia</span>
		</div>
		<div class="mws-form-row">
			<label class="mws-form-label">Judul</label>
			<div class="mws-form-item">
				<?php echo $news_language[0]->judul_news ?><br />
			</div>
		</div>
		<div class="mws-form-row">
			<label class="mws-form-label">Content</label>
			<div class="mws-form-item">
				<?php echo $news_language[0]->content_news ?><br />
			</div>
		</div>
	</div>
</div>

<div class="mws-panel grid_8">
	<div class="mws-button-row">
		<?php echo anchor('admin/news/index', 'Back', 'class="btn"'); ?>
	</div>
</div>

<?php echo form_close()?>
