<?php
/**
 *
 * This file is part of IkoBB Forum and belongs to the module <Iko>.
 *
 * @copyright (c) IkoBB <https://www.ikobb.de>
 * @license       GNU General Public License, version 3 (GPL-3.0)
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
error_reporting(E_ALL);

/**
 * @author Marcel
 *
 */
class Core
{
	const version = "1.0.0a";
	public static $basepath;
	public static $adminpath;
	public static $corepath;
	public static $modulepath;
	public static $currentpath;
	public static $PDO;

	/**
	 * @param int $phase
	 */
	public static function init($phase)
	{
		switch ($phase) {
			case 0:
				self::$basepath = self::loadPath();
				self::$corepath = self::$basepath . "core/";
				self::$adminpath = self::$basepath . "admin/";
				self::$modulepath = self::$basepath . "module/";
			break;
			case 1:
				self::loadPDO();
			break;
			default:
				null;
			break;
		}
	}

	/**
	 * @return string
	 */
	private static function loadPath()
	{
		$current_file = dirname(__FILE__);
		$win = false;
		if (strpos($current_file, "\\") > 0) {
			$win = true;
		}
		if ($win == true) {
			$current_file = strtolower(str_replace("\\", "/", $current_file));
		}
		$base_without_doc_root = str_replace(strtolower($_SERVER['DOCUMENT_ROOT']), "", $current_file);
		$base_without_core = str_replace("/core", "", $base_without_doc_root);
		$base_current_file = str_replace($base_without_core, "", strtolower($_SERVER['PHP_SELF']));
		$base = explode("/", $base_current_file);
		$dir = "./";
		if (count($base) > 1) {
			for ($i = 0; $i < count($base); $i++) {
				if ($base[$i] != "" && $i > 1) {
					$dir .= "../";
				}
			}
		}
		$path = $dir . substr($base_current_file, 1);
		self::$currentpath = $path;
		return $dir;
	}

	/**
	 * Load PDO with /Core/Database.conf.php file over Class Config
	 */
	private static function loadPDO()
	{
		$config = config::load("file", self::$corepath . "database.conf.php");
		try {
			self::$PDO = new \Iko\PDO($config->get("dns"), $config->get("username"), $config->get("password"), $config->get("options"));
		}
		catch (\PDOException $ex) {
			echo $ex->getMessage() . "<br>";
			exit;
		}

	}
}

/**
 *  Load Phase 1
 */

Core::init(0);

/**
 *  Load Config Loader
 */
//require_once Core::$corepath . "exception.class.php";
require_once Core::$corepath . 'config.class.php';
require_once Core::$corepath . "pdo.class.php";

/**
 *  Load Phase 2
 */

Core::init(1);
require_once Core::$corepath . "module.class.php";
require_once Core::$corepath . "module_loader.class.php";



