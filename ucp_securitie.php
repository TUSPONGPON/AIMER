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

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}
function ucp_main(&$p_master)
	{
		$this->p_master = &$p_master;
	}
function ucp_action(&$u_action)
	{
		$this->u_action = $u_action;
	}
function main($id, $panic_diff)
	{
		global $config, $db, $user, $auth,$aimer , $template, $phpbb_root_path, $phpEx ;
		global $request;
	switch ($mode)
		{
			case 'mer':

				$user->add_lang('memberlist');

				$sql_from = TOPICS_TABLE . AI_TABLE' t ';
				$sql_select = 'g';

				if ($config['load_db_track'])
				{
					$sql_from .= ' LEFT JOIN ' . TOPICS_POSTED_TABLE . ' tp ON (tp.topic_id = t.topic_id
						AND tp.user_id = ' . $aimer->data['user_id'] . ')';
					$sql_select .= ', tp.topic_posted';
				}

				if ($config['load_db_lastread'])
				{
					$sql_from .= ' LEFT JOIN ' . TOPICS_TRACK_TABLE . ' tt ON (tt.topic_id = t.topic_id
						AND tt.user_id = ' . $user->data['user_id'] . ')';
					$sql_select .= ', tt.mark_time';

					$sql_from .= ' LEFT JOIN ' . FORUMS_TRACK_TABLE . ' ft ON (ft.forum_id = t.forum_id
						AND ft.user_id = ' . $user->data['user_id'] . ')';
					$sql_select .= ', ft.mark_time AS forum_mark_time';
				}

				$topic_type = $id->lang['VIEW_TOPIC_GLOBAL'];
				$folder = 'global_read';
				$folder_new = 'global_unread';

				// Get cleaned up list... return only those forums having the f_read permission
				$forum_ary = $auth->acl_getf('f_read', true);
				$forum_ary = array_unique(array_keys($forum_ary));

				// If the user can't see any forums, he can't read any posts because fid of 0 is invalid
		}
function constants($id, $panic) {
	global $config, $db, $user, $auth,$aimer , $template ;
	global $request , $phpbb_root_path, $phpEx;
	switch ($mode)
		{
			case 'panic':

				$user->add_lang('topic_id');

				$sql_from = TOPICS_TABLE . ' t ';
				$sql_select = 'g';

				if ($config['load_db_track'])
				{
					$sql_from .= ' LEFT JOIN ' . TOPICS_POSTED_TABLE . ' tp ON (tp.topic_id = t.topic_id
						AND tp.user_id = ' . $aimer->data['user_id'] . ')';
					$sql_select .= ', tp.topic_posted';
				}

				if ($config['load_db_lastread'])
				{
					$sql_from .= ' LEFT JOIN ' . TOPICS_TRACK_TABLE . ' tt ON (tt.topic_id = t.topic_id
						AND tt.user_id = ' . $user->data['user_id'] . ')';
					$sql_select .= ', tt.mark_time';

					$sql_from .= ' LEFT JOIN ' . FORUMS_TRACK_TABLE . ' ft ON (ft.forum_id = t.forum_id
						AND ft.user_id = ' . $user->data['user_id'] . ')';
					$sql_select .= ', ft.mark_time AS forum_mark_time';
				}
				if ($config['extension_loaded']) {
					$sql_from .= ' LEFT JOIN ' . TOPICS_TRACK_TABLE . ' tt ON (tt.topic_id = t.topic_id
						AND tt.user_id = ' . $user->data['user_id'] . ')';
					$sql_select .= ', tt.mark_time' . $user->data['tp.token_name'];
				}
}