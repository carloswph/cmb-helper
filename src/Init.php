<?php

namespace WPH\CMB;

class Init {

	public function __construct() {

		if ( class_exists( 'CMB2_Bootstrap_280', false ) ) {
			return 'CMB2 not loaded.';	
		}
	}

}