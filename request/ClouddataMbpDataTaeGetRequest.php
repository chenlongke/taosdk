<?php
/**
 * TOP API: taobao.clouddata.mbp.data.tae.get request
 * 
 * @author auto create
 * @since 1.0, 2013-12-24 00:00:00
 */
class ClouddataMbpDataTaeGetRequest
{
	/** 
	 * 形式为param1=value1,param2=value2,...的字符串， 参数名称只能包含字母数字和下划线，Value如果包含=和，必须用\转义，没有参数则不选
	 **/
	private $parameter;
	
	/** 
	 * SQL id
	 **/
	private $sqlId;
	
	private $apiParas = array();
	
	public function setParameter($parameter)
	{
		$this->parameter = $parameter;
		$this->apiParas["parameter"] = $parameter;
	}

	public function getParameter()
	{
		return $this->parameter;
	}

	public function setSqlId($sqlId)
	{
		$this->sqlId = $sqlId;
		$this->apiParas["sql_id"] = $sqlId;
	}

	public function getSqlId()
	{
		return $this->sqlId;
	}

	public function getApiMethodName()
	{
		return "taobao.clouddata.mbp.data.tae.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->sqlId,"sqlId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
