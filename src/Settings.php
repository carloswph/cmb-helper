<?php

namespace WPH\CMB;

class Settings {

	protected $metabox;
	
	protected $fields = array();
	
	public function __construct( 
						Array $metabox, 
						$fields = array()) {
		
		$this->metabox = $metabox;

		$this->fields = (array) $fields;
		
		add_action('cmb2_init', array($this, 'create'));
		
	}
	
	public function create() {
		
		$box = new_cmb2_box($this->metabox);
		
		foreach($this->fields as $field) {
			$box->add_field($field);
		}

		return $this;
	}

}