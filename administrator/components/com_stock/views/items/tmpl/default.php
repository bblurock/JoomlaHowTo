<?php

?>

<form action="<?php echo JRoute::_('index.php'); ?>"
	method="post"
	name="adminForm"
	id="adminForm">
	<table class="table table-striped">
		<thead>
		<tr>
			<th>
				ID
			</th>
			<th>
				Stock Number
			</th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($this->items as $i => $item): ?>
			<tr>
				<td>
					<a href="<?php echo JRoute::_('index.php?option=com_stock&task=item.edit&id=' . $item->id); ?>">
						<?php echo $this->escape($item->id); ?>
					</a>
				</td>
				<td>
					<?php echo $item->stock_number; ?>
				</td>
			</tr>
		<?php
		endforeach;
		?>
		</tbody>
	</table>

	<input type="hidden" name="option" value="com_stock" />
	<input type="hidden" name="task" value="" />
	<?php echo JHtml::_('form.token'); ?>
</form>