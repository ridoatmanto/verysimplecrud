<?php defined('_JEXEC') or die; ?>

<form action="<?php echo JRoute::_('index.php?option=com_crud&view=cruds'); ?>" method="post" name="adminForm" id="adminForm">

<div id="j-main-container" class="span12">
	<div class="clearfix"> </div>
</div>

<div class="filter-search btn-group pull-left">
	<label for="filter_search" class="element-invisible"><?php 	echo JText::_('COM_FOLIO_SEARCH_IN_TITLE');?></label>
	<input type="text" name="filter_search" id="filter_search" placeholder="<?php echo JText::_('COM_FOLIO_SEARCH_IN_TITLE'); ?>" value="<?php echo $this->escape($this->searchterms); ?>" 
	title="<?php echo JText::_('COM_FOLIO_SEARCH_IN_TITLE'); ?>" />
</div>

<div class="btn-group pull-left">
	<button class="btn hasTooltip" type="submit" title="<?php echo JText::_('JSEARCH_FILTER_SUBMIT'); ?>"><i class="icon-search"></i></button>
	<button class="btn hasTooltip" type="button" title="<?php echo JText::_('JSEARCH_FILTER_CLEAR'); ?>" 
	onclick="document.getElementById('filter_search').value = ''"><i class="icon-remove"></i></button>
</div>

<div class="btn-group pull-right hidden-phone">
	<label for="limit" class="element-invisible">
		<?php echo JText::_('JFIELD_PLG_SEARCH_SEARCHLIMIT_DESC');?>
	</label>
	<?php echo $this->pagination->getLimitBox(); ?>
</div>
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
			<tfoot>
				<tr>
					<td colspan="10">
						<?php echo $this->pagination->getListFooter(); ?>
					</td>
				</tr>
			</tfoot>
		</tbody>
	</table>
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="boxchecked" value="0" />
	<?php echo JHtml::_('form.token'); ?>
</form>