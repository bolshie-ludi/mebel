<div>
	<?php 
	print $fields['title']->content;
	print $fields['field_photo']->content;
	if (!empty($fields['field_price_2'])){
	print '<div class="new-price">Цена: <del>'.$fields['field_price']->content.'</del> '.$fields['field_price_2']->content.'</div>';
	} else {
		print '<div class="price">Цена: '.$fields['field_price']->content.'</div>';
	}
	 ?>
</div>
