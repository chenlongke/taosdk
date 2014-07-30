<?php
/**
 * TOP API: taobao.vmarket.taoma.codes.get request
 * 
 * @author auto create
 * @since 1.0, 2013-12-23 00:00:00
 */
class VmarketTaomaCodesGetRequest
{
	/** 
	 * 码商ID
	 **/
	private $codemerchantId;
	
	/** 
	 * 可能是订单id，可能是promotion_bizType组成的id，有可能是其他，根据他查询码信息
	 **/
	private $outUniqueId;
	
	private $apiParas = array();
	
	public function setCodemerchantId($codemerchantId)
	{
		$this->codemerchantId = $codemerchantId;
		$this->apiParas["codemerchant_id"] = $codemerchantId;
	}

	public function getCodemerchantId()
	{
		return $this->codemerchantId;
	}

	public function setOutUniqueId($outUniqueId)
	{
		$this->outUniqueId = $outUniqueId;
		$this->apiParas["out_unique_id"] = $outUniqueId;
	}

	public function getOutUniqueId()
	{
		return $this->outUniqueId;
	}

	public function getApiMethodName()
	{
		return "taobao.vmarket.taoma.codes.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->outUniqueId,"outUniqueId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
