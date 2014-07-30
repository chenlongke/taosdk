<?php
/**
 * TOP API: com.de.activity.luckydraw request
 * 
 * @author auto create
 * @since 1.0, 2014-04-15 00:00:00
 */
class ComDeActivityLuckydrawRequest
{
	/** 
	 * 账号ID
	 **/
	private $accountId;
	
	/** 
	 * 活动ID
	 **/
	private $activeId;
	
	/** 
	 * 机器设备号
	 **/
	private $machineId;
	
	/** 
	 * 时间戳
	 **/
	private $sequenceId;
	
	private $apiParas = array();
	
	public function setAccountId($accountId)
	{
		$this->accountId = $accountId;
		$this->apiParas["account_id"] = $accountId;
	}

	public function getAccountId()
	{
		return $this->accountId;
	}

	public function setActiveId($activeId)
	{
		$this->activeId = $activeId;
		$this->apiParas["active_id"] = $activeId;
	}

	public function getActiveId()
	{
		return $this->activeId;
	}

	public function setMachineId($machineId)
	{
		$this->machineId = $machineId;
		$this->apiParas["machine_id"] = $machineId;
	}

	public function getMachineId()
	{
		return $this->machineId;
	}

	public function setSequenceId($sequenceId)
	{
		$this->sequenceId = $sequenceId;
		$this->apiParas["sequence_id"] = $sequenceId;
	}

	public function getSequenceId()
	{
		return $this->sequenceId;
	}

	public function getApiMethodName()
	{
		return "com.de.activity.luckydraw";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->accountId,"accountId");
		RequestCheckUtil::checkNotNull($this->activeId,"activeId");
		RequestCheckUtil::checkNotNull($this->machineId,"machineId");
		RequestCheckUtil::checkNotNull($this->sequenceId,"sequenceId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
