<?php

/**
 * Class StockModelItems
 */
class StockModelItems extends JModelList
{
	/**
	 * Method to get a JDatabaseQuery object for retrieving the data set from a database.
	 *
	 * @return JDatabaseQuery
	 */
	public function getListQuery()
	{
		$db    = $this->getDbo();
		$query = $db->getQuery(true);

		$query->select('stock.*')
				->from('#__stock_items AS stock');

		return $query;
	}
}