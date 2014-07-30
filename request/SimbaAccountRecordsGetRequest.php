<?php
/**
 * TOP API: taobao.simba.account.records.get request
 * 
 * @author auto create
 * @since 1.0, 2011-02-22 00:00:00
 */
class SimbaAccountRecordsGetRequest
{
	/** 
	 * 数据时段的结束时间, 默认是今天，最多一次获取90天的数据
	 **/
	private $endTime;
	
	/** 
	 * 主人昵称
	 **/
	private $nick;
	
	/** 
	 * 数据时段的开始时间, 默认90天前，最早只能是90天前
	 **/
	private $startTime;
	
	private $apiParas = array();
	
	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function getApiMethodName()
	{
		return "taobao.simba.account.records.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
