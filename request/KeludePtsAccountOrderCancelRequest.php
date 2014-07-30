<?php
/**
 * TOP API: taobao.kelude.pts.account.order.cancel request
 * 
 * @author auto create
 * @since 1.0, 2014-04-09 00:00:00
 */
class KeludePtsAccountOrderCancelRequest
{
	/** 
	 * havana ID
	 **/
	private $havanaId;
	
	private $apiParas = array();
	
	public function setHavanaId($havanaId)
	{
		$this->havanaId = $havanaId;
		$this->apiParas["havana_id"] = $havanaId;
	}

	public function getHavanaId()
	{
		return $this->havanaId;
	}

	public function getApiMethodName()
	{
		return "taobao.kelude.pts.account.order.cancel";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->havanaId,"havanaId");
		RequestCheckUtil::checkMinValue($this->havanaId,1,"havanaId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
