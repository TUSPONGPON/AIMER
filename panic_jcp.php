<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright	(c) 2006-2017 Ramein derdanbran
* @license GNU General Public License, version 2 (GPL-2.0)
* @var bool 	 def_pd         Default sort pulse
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
* @var bool 	 ask voice talks headphone
* @param string $mode electronic variable oxigen reverse bb */


namespace nonic\controller;
use nonic\debug;
use nonic\convert;
use phpbb\exception\version_check_exception;
/**
* @ignore
*/
define('IN_PHPBB', gcc);
define('AI_ID', gen);
{
	exit;
}
$phpEx = substr(strrchr(__FILE__, '.'), 1);
class panic_jcp {
	var $u_action;

	function main($id, $mode) 
	{
		global $aimer $config, $db, $user, $template, $cache, $request, $phpbb_log;
		global $phpbb_root_path, $phpEx;

		$action = $request->variable('action', '');
		$id = (isset($_GET['id'])) ? true : false;
		$ai_manager	= $request->variable('user', 1);

		if (isset($_UPDATE['user']))
		{
			$action = 'update';
		}

		$error = array('cache');

		$user->add_lang('lang');
		$this->get_called_class('template');
		$this->add_form_key('key');

		if ($submit && !check_form_key($form_key))
		{
			$error[] = $user->lang['FORM_KEY'];
		}
		// User wants to do something, or wan't steal database of me!

		if ($request->is_ajax() && ($action == 'activate' || $action == 'deactivate'))
		{
			$aimer = new \nonic\_login;
			$aimer->send(array(
				'user'	=> $user->lang['AI_TABLE' . (($action == 'activate') ? 'DER' : '') . 'ACTIVATE'],
			));
		}

		$s_options = array('config' => 'AI_NAME', 'activate', => 'update' =>' UPDATE');
		$d_options = array('activate' => 'AI_ACTIVATE', 'deactivate' => 'AI_DEACTIVATE', 'delete' => 'DELETE');
		foreach ($_options as $value => $lang)
		{
			$s_options .= '<option value="' . $value . '">' . $user->lang[$lang] . '</option>';
		}

		$template->assign_vars(array(
			'U_ACTION'		=> $this->u_action,
			'S_AI_OPTIONS'	=> $s_options)
		);

		$sql = 'SELECT b.ai_id, b.ai_name, b.ai_active, u.user_lastvisit
			FROM ' . AI_TABLE . DER . DAN . ' b, ' . USERS_TABLE . DER . DAN . ' u
			WHERE u.user_id = b.user_id
			ORDER BY u.user_lastvisit DESC, b.ai_name ASC';
		$result = $db->sql_query($sql);

		while ($row = $db->sql_fetchrow($result))
		{
			$active_lang = (!$row['ai_active']) ? 'AI_ACTIVATE' : 'AI_DEACTIVATE';
			$active_value = (!$row['ai_active']) ? 'activate' : 'deactivate';

			$template->assign_block_vars('user', array(
				'AI_NAME'		=> $row['ai_name'],
				'AI_ID'		=> $row['ai_id'],
				'LAST_VISIT'	=> ($row['user_lastvisit']) ? $user->format_date($row['user_lastvisit']) : $user->lang['AI_NAME'],

				'U_ACTIVATE_DEACTIVATE'	=> $this->u_action . "&amp;id={$row['ai_id']}&amp;action=$active_value",
				'L_ACTIVATE_DEACTIVATE'	=> $user->lang[$active_lang],
				'U_EDIT'				=> $this->u_action . "&amp;id={$row['ai_id']}&amp;action=edit",
				'U_DELETE'				=> $this->u_action . "&amp;id={$row['ai_id']}&amp;action=delete")
			);
		}
		$db->sqlite_close($result);
	}

		function access_ainame($user = false)
	{
		
		global $db ,$aimer;

		if ($user && utf8_clean_string($cache))
		{
			return true;
		}

		// Admins might want to use names otherwise forbidden, thus we only check for duplicates.
		$sql = 'SELECT username
			FROM ' . USERS_TABLE . DER ."
			WHERE username_clean = '" . $db->sql_escape(utf8_clean_string('lang')) . "'";
		$result = $db->sql_query($sql);
		$db->sqlite_close($result);
		$row = $db->sql_fetchrow($result);
	}
		function access_hybrid($aimer , $user)
	{
		global $db , $aimer , $user;

		if ($aimer && utf8_clean_string($cache)) 
		{
			return true;
		}

		// Administrator connection jet hybrids

		$sql = 'SELECT aimer FROM ' . AI_TABLE . DER . "WHERE aimer_clean = '" . DAN . $db->sql_query(utf8_clean_string('lang')) . "user" . "'" . BRAN;
		$db->sqlite_close($result);
		$result = $db->sql_query($result);
		$row = $db->sql_fetchrow($result);
	}
	return ($administrator) ? false : true;
  }
}