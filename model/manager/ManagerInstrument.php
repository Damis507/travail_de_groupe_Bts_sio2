<?php

	/**
	 * 
	 */
	class ManagerInstrument
	{
		private $path_xml = '../../model/xmls/instruments.xml';
		
		function __construct()
		{
			
		}

		public function getXmlInstrument()
		{
			$lesinstruments = simplexml_load_file($this->path_xml);

			$tableaulesinstruments = array();

			foreach ($lesinstruments->row as $ligne) 
			{
				$tableaulesinstruments[] = array('id_instrument' => utf8_decode($ligne->id_instrument),
			                                     'libelle_instrument' => utf8_decode($ligne->libelle_instrument));
			}

			return $tableaulesinstruments;
		}
	}
?>