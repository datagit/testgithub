<?php

/**
 * Class Fame_Hall
 * constants
 * support tool
 * cache
 * frontend
 */
class Fame_Hall {
	const Event_Type_Amusement = 1;
	const Ranking_Type_Amusement = 1;

	private static $_config = array(
		// event_type
		Fame_Hall::Event_Type_Amusement => array(
			// ranking_type
			Fame_Hall::Ranking_Type_Amusement,
		),
	);

	private static $_config_table_identified_list = array(
		Fame_Hall::Event_Type_Amusement => 'namespace_amusement_%d',
	);

	public function createTables($event_type)
    {
        foreach (Fame_Hall::$_config[$event_type] as $ranking_type) {
            // call create table

        }
    }

	public function getTableIdentified($event_type, $event_id)
	{
		return sprintf(Fame_Hall::$_config_table_identified_list[$event_type], $event_id);
	}

	public function getNamespaceByTableIdentified($table_identified)
	{
		return $namespace = ($table_identified);
	}

	public function getDataRankingBy($namespace, $event_id)
	{
		return $data_ranking = ($namespace, $event_id);
	}

	public function getDataList($event_type, $event_id)
	{
		$table_identified = $this->getTableIdentified($event_type, $event_id);
		$namespace = $this->getNamespaceByTableIdentified($table_identified);
		$data_ranking = $this->getDataRankingBy($namespace, $event_id);
		// execute the logical get data list

		// sort point by DESC
		// limited
		$data_list = array();
		return $data_list;
	}

	public function saveBulk($event_type, $event_id)
	{
		$data_list = $this->getDataList($event_type, $event_id);
		// save into DB
		return true;
	}

	public function getTopBy($event_type, $event_id)
	{
		$data_top = ($event_type, $event_id);
		// sort point by DESC
		// limited
		$data_list = array();
		return $data_list;
	}
}
