<?php
/**
 * Lote Fixture
 */
class LoteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'metros2' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'lote_estado_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'seccione_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'num_lote' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'lotes_lote_estados_id_fk' => array('column' => 'lote_estado_id', 'unique' => 0),
			'lotes_secciones_id_fk' => array('column' => 'seccione_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'metros2' => 1,
			'lote_estado_id' => 1,
			'seccione_id' => 1,
			'num_lote' => 1
		),
	);

}
