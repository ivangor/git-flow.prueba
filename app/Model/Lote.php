<?php
App::uses('AppModel', 'Model');
/**
 * Lote Model
 *
 * @property LoteEstado $LoteEstado
 * @property Seccione $Seccione
 */
class Lote extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'metros2' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'lote_estado_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'LoteEstado' => array(
			'className' => 'LoteEstado',
			'foreignKey' => 'lote_estado_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Seccione' => array(
			'className' => 'Seccione',
			'foreignKey' => 'seccione_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
