<?php
/**
 * TOP API: tmall.cwf.finishusertask request
 * 
 * @author auto create
 * @since 1.0, 2013-07-05 00:00:00
 */
class TmallCwfFinishusertaskRequest
{
	/** 
	 * 备注信息
	 **/
	private $memo;
	
	/** 
	 * 上下文的值
	 **/
	private $result;
	
	/** 
	 * 任务实例id
	 **/
	private $taskRunId;
	
	/** 
	 * 审批人的id
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setMemo($memo)
	{
		$this->memo = $memo;
		$this->apiParas["memo"] = $memo;
	}

	public function getMemo()
	{
		return $this->memo;
	}

	public function setResult($result)
	{
		$this->result = $result;
		$this->apiParas["result"] = $result;
	}

	public function getResult()
	{
		return $this->result;
	}

	public function setTaskRunId($taskRunId)
	{
		$this->taskRunId = $taskRunId;
		$this->apiParas["task_run_id"] = $taskRunId;
	}

	public function getTaskRunId()
	{
		return $this->taskRunId;
	}

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "tmall.cwf.finishusertask";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->memo,"memo");
		RequestCheckUtil::checkNotNull($this->result,"result");
		RequestCheckUtil::checkNotNull($this->taskRunId,"taskRunId");
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
