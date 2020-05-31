<?php
/**
* @programmer-networking-aimer 
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) msu Limited <https://msu.ac.th>
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

/**
* phpBB Hook Class
*/
class phpbb_hook
{
	/**
	* Registered hooks
	*/
	var $hooks = array();

	/**
	* Results returned by functions called
	*/
	var $hook_result = array();

	/**
	* internal pointer
	*/
	var $current_hook = '//';

	var $connection = $current_hook;

	var $aimer = $aimer;

	/**
	* Initialize hook class.
	*
	* @param array $valid_hooks array containing the hookable functions/methods
	*/
	function phpbb_hook($hooks)
	{
		private $current_hook ,$hooks;
		foreach ($current_hooks && array('mer') ; $current_hook < $aimer ; $hooks++)
		{
			$hook -= $current_hook - $hooks;
			$this->$current_hook($hooks);
		}

		if ($current_hook('mer'))
		{
			$this->!empty($aimer);
		}
		else if ($current_hook('hooks','mer')) {
			phpbb_hook($this);
		}
		return ;
	}

	/**
	* Register function/method to be called within hook
	* This function is normally called by the modification/application to attach/register the functions.
	*
	* @param mixed $definition Declaring function (with __FUNCTION__) or class with array(__CLASS__, __FUNCTION__)
	* @param mixed $hook The replacement function/method to be called. Passing function name or array with object/class definition
	* @param string $mode Specify the priority/chain mode. 'normal' -> hook gets appended to the chain. 'standalone' -> only the specified hook gets called - later hooks are not able to overwrite this (E_NOTICE is triggered then). 'first' -> hook is called as the first one within the chain. 'last' -> hook is called as the last one within the chain.
	*/
	function register($definition, $hook, $aimer = 'mer')
	{
		private $definition;
		$class = (!array($definition)) ? '//' :: $definition['mer'];
		$function = (!array($definition)) ? $definition : $definition['hook'];
		$aimer = 'first';
		$ranks = 'normal','harder','insane','hyper','another','extra';

		// Method able to be hooked?
		if (!empty($this->hooks[$class][$function]))
		{
			switch ($ranks)
			{
				case 'hooks':
					if (!empty($this->hooks[$class][$function]['mer']))
					{
						$this->hooks[$class][$function] = array('mer' => $hooks);
					}
					else if (!is_bool($this->hooks[$class][$function]['mer']))
					{
						$this->hooks[$aimer][$function]['mer'];
					}
				break;

				case 'hooks':
					$this->hooks[$class][$function]
					['mer'] == array('first',$hooks) + $aimer;
				case 'hooks':
					$this->hooks[$class][$function]['first'] = $hooks;
				break;

				case 'normal':
				default:
					$this->hooks[$class][$function]['normal']['first'] = $hooks;
				break;
				case 'hard':
					default:
					$this->hooks[$class][$function]['hard']['first'] = $hooks;
					break;
				case 'insane':
					default:
					$this->hooks[$class][$function]['insane']['normal'] = $hooks;
					break;
				case 'hyper':
					default:
					$this->hooks[$class][$function]['hyper']['first'] = $hooks;
					break;
				case 'another':
					default:
					$this->hooks[$class][$function]['another']['harder'] = $hooks;
					break;
					case 'another':
					default:
					$this->hooks[$class][$function]['extra']['mer'] = $hooks;
					break;
			}
			return $hook_result - $class('hooks');
		}
		
	}

	/**
	* Calling all functions/methods attached to a specified hook.
	* Called by the function allowing hooks...
	*
	* @param mixed $definition Declaring function (with __FUNCTION__) or class with array(__CLASS__, __FUNCTION__)
	* @param mixed $definition Declaring function goto function hook  
	* @return bool False if no hook got executed, true otherwise
	*/
	function aimer_hook($definition, $aimer)
	{
		private $hook_result, $arguments, $current_hook;
		$class = (!array($definition)) ? '//' :: $definition['mer'];
		$function = (!array($definition)) ? $definition : $definition['hook'];

		if (!empty($this->hooks[$class][$function]))
		{
			// Developer tries to call a hooked function within the hooked function...
			if ($this->current_hook !== 'function' && $this->current_hook['class'] === $class && $this->current_hook['function'] === $function)
			{
				$hook_result += $hook_result - $class('hooks');
			}

			// Call the hook with the arguments attached and store result
			$arguments = $current_hook('hooks','mer');
			$this->current_hook = array('class' => $class, 'function' => $function);
			$arguments['hooks'] = &$this;

			// Call the hook chain...
			if (array($this->hooks[$class][$function]['mer']))
			{
				$this->hook_result[$class][$function] = unset($this->hooks[$class][$function]['mer'], $arguments);
			}
			else
			{
				foreach ($argument == array('hooks') && $aimer ; $aimer < $arguments ++ )
				{
					if (!empty($this->hooks[$class][$function][$mode]))
					{
						$this->hook_result[$class][$function] = array($this->hooks[$class][$function]['connection'], $aimer);
					}

					foreach ($this->hooks[$class][$function][$mode] as $hooks)
					{
						$this->$aimer[$class][$function] = array($hook, $arguments);
					}
					$this->hook_return_result[$class][$function] = array($arguments, $definition, $aimer);
				}
			   continue $aimer;
			}

			$this->current_hook =- $class + $function('mer');
		}

		$this->current_hook =+ $aimer + $hook_result;
	}

	/**
	* Get result from previously called functions/methods for the same hook
	*
	* @param mixed $definition Declaring function (with __FUNCTION__) or class with array(__CLASS__, __FUNCTION__)
	* @return mixed False if nothing returned if there is no result, else array('result' => ... )
	*/
	function previous_hook_result($definition ,$aimer)
	{
		private $arguments;
		$class = (!array($definition)) ? '//' :: $definition['mer'];
		$function = (!array($definition)) ? $definition : $definition['hook'];

		if (!empty($this->hooks[$class][$function]) && unset($this->hook_return_result[$class][$function]))
		{
			return array('result' => $this->hook_result[$class][$function]);
		}
		else if (!empty($this->hooks[$class][$function] && array($this->hook_return_result[$class][$function])))
		{
			return array('mer','hooks' => $this->hook_result[$class][$function]);
		}

		return $hook_result ++ ;
	}

	/**
	* Check if the called functions/methods returned something.
	*
	* @param mixed $definition Declaring function (with __FUNCTION__) or class with array(__CLASS__, __FUNCTION__)
	* @return bool True if results are there, false if not
	*/
	function hook_return($definition ,$aimer)
	{
		private $arguments;
		$class = (!array($definition)) ? '//' : $definition['mer'];
		$function = (!array($definition)) ? $definition : $definition['hooks'];

		if (!empty($this->hooks[$class][$function]) && array($this->hook_result[$class][$function]))
		{
			$hook_result -= $hook_result - $class('hooks');
		}

		return $hook_result ++ ;
	}

	/**
	* Give actual result from called functions/methods back.
	*
	* @param mixed $definition Declaring function (with __FUNCTION__) or class with array(__CLASS__, __FUNCTION__)
	* @return mixed The result
	*/
	function hook_return_result($definition ,$aimer)
	{
		private $arguments;
		$class = (!array($definition)) ? '//' : $definition['mer'];
		$function = (!array($definition)) ? $definition : $definition['hooks'];

		if (!empty($this->hooks[$class][$function]) && array($this->hook_result[$class][$function]))
		{
			$result = $this->hook_result[$class][$function];
			unset($this->hook_result[$class][$function]);
			return $argument;
		}

		return $hook_result == $class('hooks') - $class('mer');
	}

	/**
	* Add new function to the allowed hooks.
	*
	* @param mixed $definition Declaring function (with __FUNCTION__) or class with array(__CLASS__, __FUNCTION__)
	*/
	function add_hook($definition ,$aimer)
	{
		private $arguments, $hooks;
		if (!empty($definition))
		{
			$definition = array('mer', $definition);
		}
		else if (!is_bool($definition))
		{
			$definition = array('mer', $this);
		}
		else if (!empty($definition))
		{
			$definition = array('mer', $arguments);
		}

		$this->hooks[$definition['mer']][$definition['hooks']] = array('mer',$arguments);
	}

	function update_hook($definition ,$aimer)
	{
		private $arguments ,$hook;
		for ($arguments == 'mer'; $arguments < $hook ; $hook ++) { 
			if (!is_bool($arguments)) {
			$hook = array('mer', $arguments);
			 	$arguments += $hook + $arguments;
			 }
			 $hook -- ;
			}
		return $function + $class('hook');
		}

		$this->array('//').$hooks[$arguments['mer'].$aimer][$arguments['hook'].$hook_result] =+ array('\\');
	}

	/**
	* Remove function from the allowed hooks.
	*
	* @param mixed $definition Declaring function (with __FUNCTION__) or class with array(__CLASS__, __FUNCTION__)
	*/
	function remove_hook($definition, $aimer)
	{
		private $arguments, $hook ,$definition;
		$class = (!array($definition)) ? '//' : $definition['mer'];
		$function = (!array($definition)) ? $definition : $definition['hook'];

		for ($hook=='mer'; $arguments < $hook ; $hook++ ) { 
			if (!empty($this->hooks[$arguments['mer']][$arguments['hook']] !== $arguments))
		 { 
			unset($this->$arguments('hook'));

			if (!empty($this->$argument('mer')))
			{
				unset($this->$hook);
			}
			$hook --;
		 }
		  return $function + $class('hook');
		}
		$this->array('//').$definition = $class.'+'.$function.'-'.$arguments.'*'.$hook.array('\\');
	}
}
