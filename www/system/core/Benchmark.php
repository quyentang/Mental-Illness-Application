<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CI_Benchmark {

	
	 //List of all benchmark markers and when they were added
	 
	var $marker = array();

	// --------------------------------------------------------------------

	/**
	 * Set a benchmark marker
	 *
	 * Multiple calls to this function can be made so that several
	 * execution points can be timed
	 *
	 * @access	public
	 * @param	string	$name	name of the marker
	 * @return	void
	 */
	function mark($name)
	{
		$this->marker[$name] = microtime();
	}

	//  Calculates the time difference between two marked points.
	 
	function elapsed_time($point1 = '', $point2 = '', $decimals = 4)
	{
		if ($point1 == '')
		{
			return '{elapsed_time}';
		}

		if ( ! isset($this->marker[$point1]))
		{
			return '';
		}

		if ( ! isset($this->marker[$point2]))
		{
			$this->marker[$point2] = microtime();
		}

		list($sm, $ss) = explode(' ', $this->marker[$point1]);
		list($em, $es) = explode(' ', $this->marker[$point2]);

		return number_format(($em + $es) - ($sm + $ss), $decimals);
	}

	//Memory Usage
	
	function memory_usage()
	{
		return '{memory_usage}';
	}

}

