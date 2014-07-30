<?php
/**
 * TOP API: tmall.cwf.responsefailed request
 * 
 * @author auto create
 * @since 1.0, 2013-07-05 00:00:00
 */
class TmallCwfResponsefailedRequest
{
	/** 
	 * 流程域名
	 **/
	private $domain;
	
	/** 
	 * 异常信息
	 **/
	private $exception;
	
	/** 
	 * 上下文的值,目前使用gson转换的
	 **/
	private $result;
	
	/** 
	 * 任务实例id
	 **/
	private $taskRunId;
	
	private $apiParas = array();
	
	public function setDomain($domain)
	{
		$this->domain = $domain;
		$this->apiParas["domain"] = $domain;
	}

	public function getDomain()
	{
		return $this->domain;
	}

	public function setException($exception)
	{
		$this->exception = $exception;
		$this->apiParas["exception"] = $exception;
	}

	public function getException()
	{
		return $this->exception;
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

	public function getApiMethodName()
	{
		return "tmall.cwf.responsefailed";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->domain,"domain");
		RequestCheckUtil::checkNotNull($this->exception,"exception");
		RequestCheckUtil::checkNotNull($this->result,"result");
		RequestCheckUtil::checkNotNull($this->taskRunId,"taskRunId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
