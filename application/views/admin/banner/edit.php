

<?php $attributs = 'class="mws-form"'?>
<?php
if($code=='slide'){
	echo form_open_multipart('admin/banners/update/slide', $attributs);
} else if($code=='gallery'){
	echo form_open_multipart('admin/banners/update/gallery', $attributs);
} else if($code=='arsip'){
	echo form_open_multipart('admin/banners/update/arsip', $attributs);
}
?>

<div class="mws-panel grid_8">
	<div class="mws-panel-body no-padding">
		<div class="mws-panel-header">
			<span>Edit</span>
		</div>
		<?php foreach($banners as $n): ?>
		<div class="mws-form-row">
			<label class="mws-form-label">Kategori</label>
			<div class="mws-form-item">
				<?php
				if($code=='slide'){
					$kategories = array('4' => 'Slide Home');
				} else if($code=='gallery'){
					$kategories = array('10' => 'Gallery');
				} else if($code=='arsip'){
					$kategories = array('15' => 'Arsip Gambar', '16' => 'Arsip Icon');
				}

				?>
				<?php echo form_dropdown('id_kategori_sub', $kategories, $n->id_kategori_sub, 'class="small"'); ?><br />
			</div>
		</div>
		<div class="mws-form-row">
			<label class="mws-form-label">Image</label>
			<div class="mws-form-item">
				<input type="file" name="userfile" size="20" /><br />
				<?php echo $n->url_banner ?><br>
				<?php
				if($code=='slide'){
					echo "<br><small>
						Keterangan :<br>
						* Rekomendasi Besar Gambar Slide Show 1600x650px, dengan ukuran tidak lebih dari 200kb</small>";
				} else if($code=='gallery'){
					echo "<br><small>
						Keterangan :<br>
						* Rekomendasi Besar Gambar Gallery 1000x500px, dengan ukuran tidak lebih dari 200kb</small>";

				} else if($code=='arsip'){
					echo "<br><small>
						Keterangan :<br>
						1. * Rekomendasi Ukuran gambar tidak lebih dari 200kb<br>
						2. * Rekomendasi Besar Gambar Link Image 360x202px<br>
						3. * Rekomendasi Besar Gambar Content Home 360x229px<br>
						4. * Rekomendasi Besar Gambar Logo 199x60px<br>
						5. * Rekomendasi Besar Gambar Link Situs 254x76px<br>
					</small>";
				}
				?>

			</div>
		</div>
		<?php echo form_hidden('gambar', $n->url_banner);?>
		<?php echo form_hidden('id_banner', $n->id_banner);?>
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
				<?php echo form_hidden('id_banner_language_id', $banners_language[0]->id_banner_language); ?>
				<?php echo form_input('judul_banner_id', $banners_language[0]->judul_banner, 'class="small"'); ?><br />
			</div>
		</div>
		<div class="mws-form-row">
			<label class="mws-form-label">Content</label>
			<div class="mws-form-item">
				<?php echo form_textarea('content_banner_id', $banners_language[0]->content_banner, 'class="large"'); ?><br />
			</div>
		</div>
	</div>
</div>

<div class="mws-panel grid_8">
	<div class="mws-button-row">
		<?php echo form_submit('submit', 'Submit', 'class="btn btn-danger"'); ?>
		<?php echo anchor('admin/banners/index', 'Back', 'class="btn"'); ?>
	</div>
</div>

<?php echo form_close()?>