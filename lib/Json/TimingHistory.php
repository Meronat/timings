<?php
/*
 * Aikar's Minecraft Timings Parser
 *
 * Written by Aikar <aikar@aikar.co>
 * http://aikar.co
 * http://starlis.com
 *
 * @license MIT
 */

namespace Starlis\Timings\Json;

use Starlis\Timings\FromJson;

class TimingHistory {
	use FromJson;

	/**
	 * @index @key
	 * @var int
	 */
	public $id;

	/**
	 * @index s
	 */
	public $start;

	/**
	 * @index e
	 * @var int
	 */
	public $end;

	/**
	 * @index tk
	 * @var int
	 */
	public $totalTicks;

	/**
	 * @index tm
	 * @var int
	 */
	public $totalTime;

	/**
	 * @index     h
	 * @var TimingHandler[]
	 */
	public $handlers;

	/**
	 * @index     w
	 * @var World[]
	 */
	public $worldData;
	/**
	 * @index mp
	 * @var MinuteReport[]
	 */
	public $minuteReports;
} 
