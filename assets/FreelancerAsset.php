<?php
/**
 * FreelancerAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-startbootstrap-themes
 * @license MIT
 */

/**
 * Load this asset with...
 * p2made\SB\assets\FreelancerAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\SB\assets\FreelancerAsset',
 */

namespace p2made\SB\assets;

class FreelancerAsset extends \p2made\assets\base\P2AssetBundle
{
	private $resourceData = array(

		'published' => [
			'sourcePath' => '@vendor/p2made/yii2-startbootstrap-themes/assets/lib/freelancer',
			'css' => [
				'css/freelancer.min.css',
			],
			'js' => [
				'js/jqBootstrapValidation.min.js',
				'js/contact.min.js',
				'js/freelancer.min.js',
			],
		],

		'depends' => [
			'p2made\SB\assets\FreelancerFontsAsset',
		],

	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
