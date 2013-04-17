<div>
	<?php 
	print $fields['title']->content;
	print $fields['field_photo']->content;
	if (!empty($fields['field_price_2'])){
	print '<div class="price">Цена: <del>'.$fields['field_price']->content.'</del><font color="#900"> '.$fields['field_price_2']->content.'</font></div>';
	} else {
		print '<div class="price">Цена: '.$fields['field_price']->content.'</div>';
	}
	 ?>
</div>
