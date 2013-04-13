<div>
	<?php 
	print $fields['title']->content;
	print $fields['field_photo']->content;
	if (!empty($fields['field_price_2'])){
	print $fields['field_price_2']->content;
	print $fields['field_price']->content;
	} else {
		print '<div style="font-size: 1.3em; font-weight: bold;">'.$fields['field_price']->content.'</div>';
	}
	 ?>
</div>
