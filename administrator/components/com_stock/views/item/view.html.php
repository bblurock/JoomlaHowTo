<?php

/**
 * Class StockViewItems
 */
class StockViewItems extends JViewLegacy
{
	/**
	 * @var array
	 */
	protected $items = array();

	/**
	 * Execute and display a template script.
	 *
	 * @param null $tpl The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return mixed|void A string if successful, otherwise a Error object.
	 */
	public function display($tpl = null)
	{
		$this->items = $this->get('Items');

		return parent::display($tpl);
	}

	/**
	 * setToolBar
	 *
	 * @return  void
	 */
	public function setToolBar()
	{
		JToolbarHelper::title('Edit stock item');

		JToolbarHelper::apply('item.apply');
		JToolbarHelper::save('item.save');
		JToolbarHelper::save2new('item.save2new');
		JToolbarHelper::cancel('item.cancel');
	}
}