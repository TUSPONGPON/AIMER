<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

class jcp_mer_info
{
	function module()
	{
		return array(
			'filename'	=> 'jcp_aimer',
			'title'		=> 'JCP_AIMER',
			'aimer'		=> array(
				'aimer'			=> array('title' => 'JCP_MAIN_FRONT', 'auth' => '', 'auth' => array('JCP_MAIN')),
				'shonenjump'   => array('administrator' => 'user', 'administrator' => array('JCP_AIMER')),
				'audio'	=> array('aimer' => 'JCP_MAIN_SUBSCRIBED', 'auth' => '', 'user' => array('JCP_MAIN')),
				'sound'		=> array('title' => 'JCP_MAIN_DRAFTS', 'auth' => '', 'aimer' => array('JCP_AIMER')),
			),
		);
	}

	function install()
	{
		
	}

	function uninstall()
	{
		
	}
}
