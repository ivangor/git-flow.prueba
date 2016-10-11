<?php
App::uses('AppModel', 'Model');
/**
 * Seccione Model
 *
 * @property SeccioneEstado $SeccioneEstado
 * @property SeccioneVisibilidade $SeccioneVisibilidade
 * @property Imagene $Imagene
 * @property Lote $Lote
 * @property Casa $Casa
 */
class Seccione extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'uri_img_ubicacion' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'uri_img' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
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
		'SeccioneEstado' => array(
			'className' => 'SeccioneEstado',
			'foreignKey' => 'seccione_estado_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SeccioneVisibilidade' => array(
			'className' => 'SeccioneVisibilidade',
			'foreignKey' => 'seccione_visibilidade_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Imagene' => array(
			'className' => 'Imagene',
			'foreignKey' => 'seccione_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Lote' => array(
			'className' => 'Lote',
			'foreignKey' => 'seccione_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Casa' => array(
			'className' => 'Casa',
			'joinTable' => 'casas_secciones',
			'foreignKey' => 'seccione_id',
			'associationForeignKey' => 'casa_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
