<?php
/**
 * @author Gabriele Fontana <gafreax@gmail.com>
 * @license GPLv2
 */
namespace gafreax\debug;

class Debugger
{
	/**
     * Dump
     * @param mixed $param what dev want to dump
     * @param boolean $internally If the function was called internally or from outside
     */
	public static function d($param,$internally = false)
	{
		echo '<br><br><hr><pre><h1>';
		$level = $internally? 2 : 1 ;
		echo debug_backtrace()[$level]['function'];
		echo '</h1>';
		if(is_array($param)) 
			print_r($param);
		else 
			var_dump($param);
	}

	/** 
     * Dump & Die
	 * @param mixed $param what dev want to dump
     */
	public static function dd($param)
	{
		static::d($param, true);
		die();
	}
	
}
