<?php
/**
 * TOP API: taobao.shop.microtask.feedback request
 * 
 * @author auto create
 * @since 1.0, 2013-06-24 00:00:00
 */
class ShopMicrotaskFeedbackRequest
{
	/** 
	 * 业务数据，json数据格式
	 **/
	private $params;
	
	/** 
	 * 任务类型，1为微任务审核成功反馈；2为微任务审核失败反馈；3为结算
	 **/
	private $taskType;
	
	private $apiParas = array();
	
	public function setParams($params)
	{
		$this->params = $params;
		$this->apiParas["params"] = $params;
	}

	public function getParams()
	{
		return $this->params;
	}

	public function setTaskType($taskType)
	{
		$this->taskType = $taskType;
		$this->apiParas["task_type"] = $taskType;
	}

	public function getTaskType()
	{
		return $this->taskType;
	}

	public function getApiMethodName()
	{
		return "taobao.shop.microtask.feedback";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->params,"params");
		RequestCheckUtil::checkMaxListSize($this->params,10,"params");
		RequestCheckUtil::checkMaxLength($this->params,10000,"params");
		RequestCheckUtil::checkNotNull($this->taskType,"taskType");
		RequestCheckUtil::checkMaxListSize($this->taskType,9,"taskType");
		RequestCheckUtil::checkMaxLength($this->taskType,3,"taskType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
