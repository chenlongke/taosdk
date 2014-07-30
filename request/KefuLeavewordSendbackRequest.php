<?php
/**
 * TOP API: taobao.kefu.leaveword.sendback request
 * 
 * @author auto create
 * @since 1.0, 2011-09-08 00:00:00
 */
class KefuLeavewordSendbackRequest
{
	/** 
	 * 留言任务的标识
	 **/
	private $taskId;
	
	private $apiParas = array();
	
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
		return "taobao.kefu.leaveword.sendback";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->taskId,"taskId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
