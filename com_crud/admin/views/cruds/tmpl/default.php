<?php defined('_JEXEC') or die; ?>
<form action="<?php echo JRoute::_('index.php?option=com_crud&view=cruds'); ?>" 
method="post" name="adminForm" id="adminForm">
<div id="j-main-container" class="span12">
	<div class="clearfix"> </div>
	<table class="table table-striped" id="folioList">
		<thead>
			<tr>
				<th width="1%" class="hidden-phone">
					<input type="checkbox" name="checkall-toggle" value=""	onclick="Joomla.checkAll(this)" />
				</th>
				<th class="title">Name</th>
				<th class="title">Birth Date</th>
				<th class="title">Address</th>
			</tr>
		</thead>

		<tbody>
			<?php foreach ($this->items as $i => $item) : ?>
				<tr class="row<?php echo $i % 2; ?>">
					<td class="center hidden-phone">
						<?php echo JHtml::_('grid.id', $i, $item->id); ?>
					</td>
					<td class="nowrap has-context">
						<?php echo $this->escape($item->name); ?>
					</td>
					<td class="nowrap has-context">
						<?php echo JHtml::_('date', $item->birth, 'd F Y'); ?>
					</td>
					<td class="nowrap has-context">
						<?php echo $this->escape($item->address); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>

	</table>
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="boxchecked" value="0" />
	<?php echo JHtml::_('form.token'); ?>
</div>
</form>