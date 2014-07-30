<?php
/**
 * TOP API: taobao.crm.service.task.count request
 * 
 * @author auto create
 * @since 1.0, 2014-01-07 00:00:00
 */
class CrmServiceTaskCountRequest
{
	/** 
	 * 业务类型，le－物流异常，vc－负面评价
	 **/
	private $bizType;
	
	private $apiParas = array();
	
	public function setBizType($bizType)
	{
		$this->bizType = $bizType;
		$this->apiParas["biz_type"] = $bizType;
	}

	public function getBizType()
	{
		return $this->bizType;
	}

	public function getApiMethodName()
	{
		return "taobao.crm.service.task.count";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizType,"bizType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
