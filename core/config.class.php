<?php
/**
 *
 * This file is part of IkoBB Forum and belongs to the module <Iko>.
 *
 * @copyright (c) IkoBB <https://www.ikobb.de>
 * @license GNU General Public License, version 3 (GPL-3.0)
 *
 * For full copyright and license information, please see
 * the LICENSE file.
 *
 */
/**
 * @author Marcel
 *
 */
namespace Iko;

/**
 * @author Marcel
 *
 */
<<<<<<< HEAD
interface config_interface {

	/**
	 * 
	 */
	function reload_config();
	/**
	 * @param unknown $name
	 * @param unknown $wert
	 * @param string $comment
	 */
	function add($name, $wert, $comment = "");
	/**
	 * @param unknown $name
	 * @param unknown $wert
	 * @param string $comment
=======
interface config_interface
{

	/**
	 *
	 */
	function reloadConfig();

	/**
	 * @param unknown $name
	 * @param unknown $wert
	 * @param string  $comment
	 */
	function add($name, $wert, $comment = "");

	/**
	 * @param unknown $name
	 * @param unknown $wert
	 * @param string  $comment
>>>>>>> origin/master
	 */
	function set($name, $wert, $comment = "");
}
/**
 * @author Marcel
 *
 */
<<<<<<< HEAD
abstract class config_loader implements config_interface {
	protected $config = array();
	protected function __construct() {
	}
	/**
	 * 
	 */
	public function get_config() {
		if(is_array($this->config))
			return $this->config;
		else
			return array();
	}
	/**
	 * {@inheritDoc}
	 * @see \Iko\config_interface::reload_config()
	 */
	public function reload_config() {
		$this->config = array();
		$this->loadConfig();
	}
=======
abstract class config_loader implements config_interface
{
	protected $config = array();

	protected function __construct()
	{
	}

	/**
	 *
	 */
	public function getConfig()
	{
		if (is_array($this->config)) {
			return $this->config;
		}
		else {
			return array();
		}
	}

	/**
	 * {@inheritDoc}
	 * @see \Iko\config_interface::reloadConfig()
	 */
	public function reloadConfig()
	{
		$this->config = array();
		$this->loadConfig();
	}

>>>>>>> origin/master
	/**
	 * {@inheritDoc}
	 * @see \Iko\config_interface::set()
	 */
	public abstract function set($name, $wert, $comment = "");
<<<<<<< HEAD
=======

>>>>>>> origin/master
	/**
	 * {@inheritDoc}
	 * @see \Iko\config_interface::add()
	 */
	public abstract function add($name, $wert, $comment = "");
}
/**
 * @author Marcel
 *
 */
<<<<<<< HEAD
class config extends config_loader{
	private static $configs = array();
	/**
	 * @param unknown $type
	 * @param unknown $args
	 * @return NULL|mixed
	 */
	public static function load($type, $args) {
		$class = null;
		$var = false;
		for($i = 0; $i < count(self::$configs); $i++) {
			if(self::$configs[$i]["type"] == $type && self::$configs[$i]["args"] == $args) {
=======
class config extends config_loader
{
	private static $configs = array();

	/**
	 * @param unknown $type
	 * @param unknown $args
	 *
	 * @return NULL|mixed
	 */
	public static function load($type, $args)
	{
		$class = null;
		$var = false;
		for ($i = 0; $i < count(self::$configs); $i++) {
			if (self::$configs[$i]["type"] == $type && self::$configs[$i]["args"] == $args) {
>>>>>>> origin/master
				$var = $i;
				break;
			}
		}
<<<<<<< HEAD
		if($var !== false) {
			if(!isset(self::$configs[$var]["class"]) || self::$configs[$var]["class"] == null) {
=======
		if ($var !== false) {
			if (!isset(self::$configs[$var]["class"]) || self::$configs[$var]["class"] == null) {
>>>>>>> origin/master
				self::$configs[$var]["class"] = new config(self::$configs[$var]["type"], self::$configs[$var]["args"]);
			}
			$class = self::$configs[$var]["class"];
		}
<<<<<<< HEAD
		else
		{
			$array = array("type" => $type, "args" => $args, "class" =>new config($type, $args));
			array_push(self::$configs, $array);
			$class = self::$configs[(count(self::$configs) - 1)]["class"];
		}
		return $class;
	}
	private $config_loader = null;
	private $create_args = null;
	/**
	 * @param unknown $type
	 * @param unknown $args
	 * @throws \Exception
	 */
	public function __construct($type, $args) {
		switch(strtolower($type)) {
			case 'file':
				$this->config_loader = new config_loader_file($args);
				break;
			case 'create':
				$this->config_loader = null;
				$this->create_args = $args;
				break;
			default:
				throw new \Exception("Config kann nur mit als File, Mysql, Create initalisiert werden.");
				break;
		}
		$this->loadConfig();
	}
	/**
	 * 
	 */
	protected function loadConfig() {
		if($this->config_loader != null) 
			$this->config = $this->config_loader->get_config();
	}
=======
		else {
			$array = array("type" => $type, "args" => $args, "class" => new config($type, $args));
			array_push(self::$configs, $array);
			$class = self::$configs[(count(self::$configs) - 1)]["class"];
		}

		return $class;
	}

	private $config_loader = null;
	private $create_args = null;

	/**
	 * @param unknown $type
	 * @param unknown $args
	 *
	 * @throws \Exception
	 */
	public function __construct($type, $args)
	{
		switch (strtolower($type)) {
			case 'file':
				$this->config_loader = new config_loader_file($args);
			break;

			case 'create':
				$this->config_loader = null;
				$this->create_args = $args;
			break;

			default:
				throw new \Exception("Config kann nur mit als File, Mysql, Create initalisiert werden.");
			break;
		}
		$this->loadConfig();
	}

	/**
	 *
	 */
	protected function loadConfig()
	{
		if ($this->config_loader != null) {
			$this->config = $this->config_loader->getConfig();
		}
	}

>>>>>>> origin/master
	/**
	 * {@inheritDoc}
	 * @see \Iko\config_loader::add()
	 */
<<<<<<< HEAD
	public function add($name, $wert, $comment = "") {
		if($this->config_loader->add($name, $wert, $comment)){
			$this->reload_config();
			if(isset($this->config[$name])) {
				return true;
			}
			else
				return false;
		}
		else
			return false;
	}
=======
	public function add($name, $wert, $comment = "")
	{
		if ($this->config_loader->add($name, $wert, $comment)) {
			$this->reloadConfig();
			if (isset($this->config[$name])) {
				return true;
			}
			else {
				return false;
			}
		}
		else {
			return false;
		}
	}

>>>>>>> origin/master
	/**
	 * {@inheritDoc}
	 * @see \Iko\config_loader::set()
	 */
<<<<<<< HEAD
	public function set($name, $wert, $comment = "") {
		if($this->config[$name] != $wert) {
			if($this->config_loader->set($name, $wert, $comment)){
				$this->reload_config();
				if(isset($this->config[$name]) && $this->config[$name] == $wert) {
					return true;
				}
				else
					return false;
			}
			else
				return false;
		}
		else 
			return true;
	}
	/**
	 * @param unknown $names
	 */
	public function get($names) {
		if(isset($this->config[$names]))
			return $this->config[$names];
		else
			return null;
	}
	/**
	 * {@inheritDoc}
	 * @see \Iko\config_loader::reload_config()
	 */
	public function reload_config() {
		$this->config_loader->reload_config();
		parent::reload_config();
=======
	public function set($name, $wert, $comment = "")
	{
		if ($this->config[$name] != $wert) {
			if ($this->config_loader->set($name, $wert, $comment)) {
				$this->reloadConfig();
				if (isset($this->config[$name]) && $this->config[$name] == $wert) {
					return true;
				}
				else {
					return false;
				}
			}
			else {
				return false;
			}
		}
		else {
			return true;
		}
	}

	/**
	 * @param unknown $names
	 */
	public function get($names)
	{
		$zw = $this->config;

		return $zw[$names];
	}

	/**
	 * {@inheritDoc}
	 * @see \Iko\config_loader::reloadConfig()
	 */
	public function reloadConfig()
	{
		$this->config_loader->reloadConfig();
		parent::reloadConfig();
>>>>>>> origin/master
	}

}
/**
 * @author Marcel
 *
 */
<<<<<<< HEAD
class config_loader_file extends config_loader{
	private $datei = "";
	/**
	 * @param unknown $args
	 */
	public function __construct($args) {
		$this->datei = core::$basepath . $args;
		$this->loadConfig();
	}
	/**
	 * @throws \Exception
	 */
	protected function loadConfig() {
		$inc = @include $this->datei;
		if($inc === false) {
=======
class config_loader_file extends config_loader
{
	private $datei = "";

	/**
	 * @param unknown $args
	 */
	public function __construct($args)
	{
		$this->datei = core::$basepath . $args;
		$this->loadConfig();
	}

	/**
	 * @throws \Exception
	 */
	protected function loadConfig()
	{
		$inc = @include $this->datei;
		if ($inc === false) {
>>>>>>> origin/master
			/* $this->FirstCreateConfig();
			$this->loadConfig(); */
			throw new \Exception("Die Datei ist nicht vorhanden");
		}
		else {
			$this->config = $config;
		}
	}
	/*protected function FirstCreateConfig() {
		$delete = true;
		if(file_exists($this->datei)) {
			$delete = unlink($this->datei);
		}
		if($delete == true) {
			$main = fopen($this->datei, "r");
			$string = "";
			while(!feof($main)) {
				$string .= fread($main, 100);
			}
			fclose($main);
			$handle = fopen(modules::getDir($this->c_module) . "config.inc.php", "x");
			fwrite($handle, $string);
			fclose($handle);
		}
	}*/
	/**
	 * {@inheritDoc}
<<<<<<< HEAD
	 * @see \Iko\config_loader::get_config()
	 */
	public function get_config() {
		return $this->config;
	}
=======
	 * @see \Iko\config_loader::getConfig()
	 */
	public function getConfig()
	{
		return $this->config;
	}

>>>>>>> origin/master
	/**
	 * {@inheritDoc}
	 * @see \Iko\config_loader::set()
	 */
<<<<<<< HEAD
	public function set($name, $wert, $comment = "") {
		//Inhalt der Datei
		$string = "";
		//Definiert den zu Eintragenden Index
		$name_temp = $name;
		//Sollte dieser ein String sein muss dieser entsprechend erweitert werden
		if(is_string($name))
			$name_temp = '"' . $name . '"';
		if(is_string($wert)) {
			$wert = '"' . $wert . '"';
		}
		//Überprüfung ob die Einstellung gesetzt ist?
		if(isset($this->config[$name])) {
			$search = $this->config[$name];
			if(is_string($search)) {
				$search = '"' . $search . '"';
			}
			if($this->config[$name] != $wert) {
				$main = fopen($this->datei, "r");
				while($read = fgets($main)) {
					if(strpos($read, '$config[' . $name_temp . ']') !== false) {
=======
	public function set($name, $wert, $comment = "")
	{
		// Content of file
		$string = "";
		// Defines the index which shall be inserted
		$name_temp = $name;
		// If it is a string, it have to expanded
		if (is_string($name)) {
			$name_temp = '"' . $name . '"';
		}
		if (is_string($wert)) {
			$wert = '"' . $wert . '"';
		}
		// Check if the config is set
		if (isset($this->config[$name])) {
			$search = $this->config[$name];
			if (is_string($search)) {
				$search = '"' . $search . '"';
			}
			if ($this->config[$name] != $wert) {
				$main = fopen($this->datei, "r");
				while ($read = fgets($main)) {
					if (strpos($read, '$config[' . $name_temp . ']') !== false) {
>>>>>>> origin/master
						$read = str_replace($search, $wert, $read);
					}
					$string .= $read;
				}
				fclose($main);
			}
		}
<<<<<<< HEAD
		if($string != "") {
			$delete = unlink($this->datei);
			if($delete === true) {
				$handle = fopen($this->datei, "x");
				$write = fwrite($handle, $string);
				fclose($handle);
				if($write !== false) {
					$this->reload_config();
					return true;
				}
				else
					return false;
=======
		if ($string != "") {
			$delete = unlink($this->datei);
			if ($delete === true) {
				$handle = fopen($this->datei, "x");
				$write = fwrite($handle, $string);
				fclose($handle);
				if ($write !== false) {
					$this->reloadConfig();

					return true;
				}
				else {
					return false;
				}
>>>>>>> origin/master
			}
			else return false;
		}
		else return false;
	}
<<<<<<< HEAD
=======

>>>>>>> origin/master
	/**
	 * {@inheritDoc}
	 * @see \Iko\config_loader::add()
	 */
<<<<<<< HEAD
	public function add($name, $wert, $comment = "") {
		$string = "";
		//Definiert den zu Eintragenden Index
		$name_temp = $name;
		//Sollte dieser ein String sein muss dieser entsprechend erweitert werden
		if(is_string($name))
			$name_temp = '"' . $name . '"';
		if(is_string($wert)) {
			$wert = '"' . $wert . '"';
		}
		if(!isset($this->config[$name])) {
			$main = fopen($this->datei, "r");
			while($read = fgets($main)) {
				if(strpos($read, '?>') !== false) {
					if($comment != "") {
=======
	public function add($name, $wert, $comment = "")
	{
		$string = "";
		// Defines the index which shall be inserted
		$name_temp = $name;
		// If it is a string, it have to expanded
		if (is_string($name)) {
			$name_temp = '"' . $name . '"';
		}
		if (is_string($wert)) {
			$wert = '"' . $wert . '"';
		}
		if (!isset($this->config[$name])) {
			$main = fopen($this->datei, "r");
			while ($read = fgets($main)) {
				if (strpos($read, '?>') !== false) {
					if ($comment != "") {
>>>>>>> origin/master
						$comment = '/*
 * ' . $comment . '
 */
';
					}
					$read = $comment . '$config[' . $name_temp . '] = ' . $wert . ';
' . $read;
				}
				$string .= $read;
			}
			fclose($main);
		}
<<<<<<< HEAD
		if($string != "") {
			$delete = unlink($this->datei);
			if($delete === true) {
				$handle = fopen($this->datei, "x");
				$write = fwrite($handle, $string);
				fclose($handle);
				if($write !== false) {
					return true;
				}
				else
					return false;
			}
			else
				return false;
		}
		else
			return false;
	}
}
class config_loader_pdo extends config_loader {
	const table = "configurations";
	private $prefix;
	private $table;
	public function __construct($args) {
		$this->args = $args;
		if(is_array($args)) {
			if(count($args) == 3) {
				if($args[2] == true) {
					$this->table = $args[1];
					$this->prefix = $args[0];
				}
			}
			else if(count($args) == 2) {
				if($args[1] == true) {
					$this->table = $args[0];
				}
			}
			else if(count($args) == 1) {
				$this->prefix = $args[0];
			}
		}
		else if(is_string($args)) {
			$this->prefix = $args;
		}
	}
	public function reload_config() {
		
	}
	protected function loadConfig() {
		
	}
	public function add($name, $wert, $comment = "") {
		
	}
	public function set($name, $wert, $comment = "") {
		
	}
	public function get_config() {
		return $this->config;
	}
	private function table() {
		$var = "";
		if($this->table != null)
			$var = $this->table;
		else 
			$var = self::table;
		return $var; 
	}
	private function name($var) {
		return $this->prefix . $var;
	}
=======
		if ($string != "") {
			$delete = unlink($this->datei);
			if ($delete === true) {
				$handle = fopen($this->datei, "x");
				$write = fwrite($handle, $string);
				fclose($handle);
				if ($write !== false) {
					return true;
				}
				else {
					return false;
				}
			}
			else {
				return false;
			}
		}
		else {
			return false;
		}
	}
>>>>>>> origin/master
}
/**
 * @author Marcel
 *
 */
<<<<<<< HEAD
class config_var {
	/**
	 * @param unknown $wert
	 * @return NULL|string|unknown
	 */
	public static function getConvert($wert) {
		$conv = null;
		if(is_array($wert)) {
			$conv = serialize($wert);
		}
		else if(is_int($wert)) {
			$conv = "" . $wert . "";
		}
		else if(is_bool($wert)) {
			if($wert)
				$conv = "true";
			else
				$conv = "false";
		}
		else if(is_string($wert)) {
			$conv = $wert;
		}
		else if(is_object($wert)) {
			$conv = serialize($wert);
		}
		return $conv;
	}
	
=======
class config_var
{
	/**
	 * @param unknown $wert
	 *
	 * @return NULL|string|unknown
	 */
	public static function getConvert($wert)
	{
		$conv = null;
		if (is_array($wert)) {
			$conv = implode("<!>", $wert);
		}
		else {
			if (is_int($wert)) {
				$conv = "" . $wert . "";
			}
			else {
				if (is_bool($wert)) {
					if ($wert) {
						$conv = "true";
					}
					else {
						$conv = "false";
					}
				}
				else {
					if (is_string($wert)) {
						$conv = $wert;
					}
				}
			}
		}

		return $conv;
	}

>>>>>>> origin/master
	private $wert;
	private $name;
	private $kommentar;
	private $config_class;
<<<<<<< HEAD
	
	/**
	 * @param unknown $name
	 * @param unknown $wert
	 * @param string $comment
	 * @param unknown $config_loader
	 */
	public function __construct($name, $wert, $comment = "", $config_loader) {
=======

	/**
	 * @param unknown $name
	 * @param unknown $wert
	 * @param string  $comment
	 * @param unknown $config_loader
	 */
	public function __construct($name, $wert, $comment = "", $config_loader)
	{
>>>>>>> origin/master
		$this->name = $name;
		$this->wert = $wert;
		$this->kommentar = $comment;
		$this->config_loader = $config_loader;
	}
<<<<<<< HEAD
	/**
	 * @param string $type
	 * @return NULL|unknown
	 */
	public function getWert($type = "") {
		$var = null;
		switch ($type) {
			case 'array':
				$var = unserialize($this->wert);
			break;
			case 'object':
				$var = unserialize($this->wert);
			break;
			case 'int':
				$var = intval($this->wert);
			break;
			case 'bool':
				if($this->wert || strtolower($this->wert) == "true")
					$var = true;
				else if(!$this->wert || strtolower($this->wert) == "false")
					$var = false;
			break;
			case 'string':
				$var = $this->wert;
			break;
			default:
				$var = $this->wert;
			break;
		}
		return $var;
	}
	/**
	 * 
	 * $var->equals($other);
	 * This Funtion use string converted objects and look if the two objects are similar
	 * 
	 * @param unknown $wert
	 * @return boolean
	 */
	public function equals($wert) {
		if(self::getConvert($wert) === $this->getWert())
			return true;
		else
			return false;
	}
	
	public function __toString() {
		return $this->string;
	}
	/**
	 * @return unknown
	 */
	public function getName() {
		return $this->name;
	}
	/**
	 * @return string
	 */
	public function getKommentar() {
		return $this->kommentar;
	}
	/**
	 * @param unknown $wert
	 * @return \Iko\NULL|\Iko\unknown
	 */
	public function __get($wert) {
=======

	/**
	 * @param string $type
	 *
	 * @return NULL|unknown
	 */
	public function getWert($type = "")
	{
		$var = null;
		switch ($type) {
			case 'array':
				$var = explode("<|>", $this->wert);
			break;

			case 'int':
				$var = intval($this->wert);
			break;

			case 'bool':
				if ($this->wert || strtolower($this->wert) == "true") {
					$var = true;
				}
				else {
					if (!$this->wert || strtolower($this->wert) == "false") {
						$var = false;
					}
				}
			break;

			case 'string':
				$var = $this->wert;
			break;

			default:
				$var = explode("<|>", $this->wert);
				if (count($var) == 1) {
					$var = $var[0];
				}
			break;
		}

		return $var;
	}

	/**
	 * @param unknown $wert
	 *
	 * @return boolean
	 */
	public function equals($wert)
	{
		if (self::getConvert($wert) == $this->getWert()) {
			return true;
		}
		else {
			return false;
		}
	}

	public function __toString()
	{
		return (string)$this->string;
	}

	/**
	 * @return unknown
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @return string
	 */
	public function getKommentar()
	{
		return $this->kommentar;
	}

	/**
	 * @param unknown $wert
	 *
	 * @return \Iko\NULL|\Iko\unknown
	 */
	public function __get($wert)
	{
>>>>>>> origin/master
		return $this->getWert($wert);
	}
}