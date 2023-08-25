<?php

namespace AcademistLMS\CPT;

use AcademistLMS\Lib;

/**
 * Class PostTypesLoader
 * @package AcademistLMS\CPT
 */
class PostTypesRegister {
	/**
	 * @var private instance of the class
	 */
	private static $instance;
	/**
	 * @var array
	 */
	private $postTypes = array();
	
	/**
	 * Private construct because of Singletone
	 */
	private function __construct() {
	}
	
	/**
	 * Returns current instance of class
	 * @return PostTypesRegister
	 */
	public static function getInstance() {
		if ( self::$instance == null ) {
			return new self;
		}
		
		return self::$instance;
	}
	
	/**
	 * Adds post type to post types array
	 *
	 * @param Lib\PostTypeInterface $postType
	 */
	private function addPostType( Lib\PostTypeInterface $postType ) {
		if ( ! array_key_exists( $postType->getBase(), $this->postTypes ) ) {
			$this->postTypes[ $postType->getbase() ] = $postType;
		}
	}
	
	/**
	 * Returns post type object by it's slug
	 *
	 * @param $slug
	 *
	 * @return mixed
	 */
	public function getPostType( $slug ) {
		if ( array_key_exists( $slug, $this->postTypes ) ) {
			return $this->postTypes[ $slug ];
		}
	}
	
	/**
	 * Adds all post types
	 *
	 * @see PostTypesLoader::addPostType()
	 */
	private function addPostTypes() {
		$cpt_class_name = apply_filters( 'academist_lms_filter_register_custom_post_types', $cpt_class_name = array() );
		
		if ( ! empty( $cpt_class_name ) ) {
			foreach ( $cpt_class_name as $cpt_class ) {
				$this->addPostType( new $cpt_class );
			}
		}
	}
	
	/**
	 * Calls addPostTypes method, loops through each post type in array and calls register method
	 */
	public function register() {
		if ( function_exists( 'academist_core_is_theme_registered' ) && academist_lms_theme_installed() && academist_core_is_theme_registered()) {
			$this->addPostTypes();
			
			foreach ( $this->postTypes as $postType ) {
				$postType->register();
			}
		}
	}
}