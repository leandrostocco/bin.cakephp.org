<?php
$tags = $this->requestAction('/tags/popular');
if (!empty($tags)): ?>
<div class="row gutter-bottom">
	<div class="columns twelve">
		<h4>Tags</h4>
	<?php
		foreach($tags as $tag) {
			$size = ($tag[0]['count'] < '30') ? $tag[0]['count']+10 : '40';
			echo ' '.$this->Html->link($tag['Tag']['name'], '/tags/'.$tag['Tag']['keyname'], array('style'=>'font-size:'.$size.'px'));
		}
	?>
	</div>
</div>
<?php endif;?>
