<?php
/**
 * TOP API: tmall.wangwangfenliu.task.get request
 * 
 * @author auto create
 * @since 1.0, 2012-12-25 00:00:00
 */
class TmallWangwangfenliuTaskGetRequest
{
	/** 
	 * 商家id
	 **/
	private $sellerId;
	
	/** 
	 * 任务id编号
	 **/
	private $taskId;
	
	private $apiParas = array();
	
	public function setSellerId($sellerId)
	{
		$this->sellerId = $sellerId;
		$this->apiParas["seller_id"] = $sellerId;
	}

	public function getSellerId()
	{
		return $this->sellerId;
	}

	public function setTaskId($taskId)
	{
		$this->taskId = $taskId;
		$this->apiParas["task_id"] = $taskId;
	}

	public function getTaskId()
	{
		return $this->taskId;
	}

	public function getApiMethodName()
	{
		return "tmall.wangwangfenliu.task.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->sellerId,"sellerId");
		RequestCheckUtil::checkMaxLength($this->sellerId,64,"sellerId");
		RequestCheckUtil::checkNotNull($this->taskId,"taskId");
		RequestCheckUtil::checkMaxLength($this->taskId,64,"taskId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
