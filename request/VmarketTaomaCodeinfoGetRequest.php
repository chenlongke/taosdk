<?php
/**
 * TOP API: taobao.vmarket.taoma.codeinfo.get request
 * 
 * @author auto create
 * @since 1.0, 2014-01-17 00:00:00
 */
class VmarketTaomaCodeinfoGetRequest
{
	/** 
	 * 码对应的业务类型，优惠券是2000
	 **/
	private $bizType;
	
	/** 
	 * 外部id，如果是优惠券即优惠券id
	 **/
	private $outerId;
	
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

	public function setOuterId($outerId)
	{
		$this->outerId = $outerId;
		$this->apiParas["outer_id"] = $outerId;
	}

	public function getOuterId()
	{
		return $this->outerId;
	}

	public function getApiMethodName()
	{
		return "taobao.vmarket.taoma.codeinfo.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizType,"bizType");
		RequestCheckUtil::checkNotNull($this->outerId,"outerId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
