<?php

namespace app\collections;

/**
 * Abstract collection to show the proper skills, use only for centraling the Singleton Pattern
 */
Abstract class AbstractCollection
{
	/**
	 * @var the place where the single instance will be stored
	 */
	protected static $instance = null;

	/**
	 * Some native overriding to avoid abstract classes to be instanciated
	 * @return type
	 */
	public function __construct(){
	}

	/**
	 * Some native overriding to avoid abstract classes to be instanciated from the clone() function
	 * @return type
	 */
	public function __clone(){
		throw new \Exception("Error while cloning an abstract class");
		
	}

	/**
	 * The only way to obtain an instance
	 * @return type
	 */
	public static function getInstance(){

		if (!isset(static::$instance)) {
			static::$instance = new static;
		}

		return static::$instance;
	}
}
