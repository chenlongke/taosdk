<?php
/**
 * TOP API: taobao.warehouse.return.send request
 * 
 * @author auto create
 * @since 1.0, 2011-09-07 00:00:00
 */
class WarehouseReturnSendRequest
{
	/** 
	 * 退货单号
	 **/
	private $crkCode;
	
	private $apiParas = array();
	
	public function setCrkCode($crkCode)
	{
		$this->crkCode = $crkCode;
		$this->apiParas["crk_code"] = $crkCode;
	}

	public function getCrkCode()
	{
		return $this->crkCode;
	}

	public function getApiMethodName()
	{
		return "taobao.warehouse.return.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->crkCode,"crkCode");
		RequestCheckUtil::checkMaxLength($this->crkCode,64,"crkCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
