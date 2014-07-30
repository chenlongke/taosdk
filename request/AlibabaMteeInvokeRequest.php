<?php
/**
 * TOP API: alibaba.mtee.invoke request
 * 
 * @author auto create
 * @since 1.0, 2014-03-17 00:00:00
 */
class AlibabaMteeInvokeRequest
{
	/** 
	 * 事件的code，一般由mtee系统分配且固定
	 **/
	private $code;
	
	/** 
	 * 事件上下文数据，map结构
	 **/
	private $context;
	
	/** 
	 * 是否是同步，可以按照需求指定
	 **/
	private $sync;
	
	private $apiParas = array();
	
	public function setCode($code)
	{
		$this->code = $code;
		$this->apiParas["code"] = $code;
	}

	public function getCode()
	{
		return $this->code;
	}

	public function setContext($context)
	{
		$this->context = $context;
		$this->apiParas["context"] = $context;
	}

	public function getContext()
	{
		return $this->context;
	}

	public function setSync($sync)
	{
		$this->sync = $sync;
		$this->apiParas["sync"] = $sync;
	}

	public function getSync()
	{
		return $this->sync;
	}

	public function getApiMethodName()
	{
		return "alibaba.mtee.invoke";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->code,"code");
		RequestCheckUtil::checkNotNull($this->context,"context");
		RequestCheckUtil::checkNotNull($this->sync,"sync");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
