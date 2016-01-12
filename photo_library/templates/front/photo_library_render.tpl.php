<?php if ($data->rowCount()): ?>
  <?php foreach ($data as $id => $row): ?>
		<?php $object = file_load($row->image); $image = $object->uri; ?>
	    <a title="<?php print $row->title; ?>" href="<?php print image_style_url('gallery_image', $image); ?>">
			<img src="<?php print image_style_url('gallery_thumbnail', $image);?>" alt="<?php print $row->title; ?>" />
		</a>
	<?php endforeach; ?>
	<?php print $pager;  ?>
<?php endif; ?>
