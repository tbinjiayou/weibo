<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 记录用户行为
 */
class Hit_ActionLogModel extends Hit_Model
{
	function __construct()
	{
		parent::__construct('actionlog');
	}
}