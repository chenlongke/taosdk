<?php
/**
 * TOP API: taobao.chaoshi.order.novice.update request
 * 
 * @author auto create
 * @since 1.0, 2013-08-26 00:00:00
 */
class ChaoshiOrderNoviceUpdateRequest
{
	/** 
	 * 交易订单ID
	 **/
	private $bizOrderId;
	
	/** 
	 * 发票的具体内容信息
	 **/
	private $noviceContent;
	
	/** 
	 * 发票抬头信息
	 **/
	private $noviceTitle;
	
	private $apiParas = array();
	
	public function setBizOrderId($bizOrderId)
	{
		$this->bizOrderId = $bizOrderId;
		$this->apiParas["biz_order_id"] = $bizOrderId;
	}

	public function getBizOrderId()
	{
		return $this->bizOrderId;
	}

	public function setNoviceContent($noviceContent)
	{
		$this->noviceContent = $noviceContent;
		$this->apiParas["novice_content"] = $noviceContent;
	}

	public function getNoviceContent()
	{
		return $this->noviceContent;
	}

	public function setNoviceTitle($noviceTitle)
	{
		$this->noviceTitle = $noviceTitle;
		$this->apiParas["novice_title"] = $noviceTitle;
	}

	public function getNoviceTitle()
	{
		return $this->noviceTitle;
	}

	public function getApiMethodName()
	{
		return "taobao.chaoshi.order.novice.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizOrderId,"bizOrderId");
		RequestCheckUtil::checkMinValue($this->bizOrderId,0,"bizOrderId");
		RequestCheckUtil::checkNotNull($this->noviceContent,"noviceContent");
		RequestCheckUtil::checkNotNull($this->noviceTitle,"noviceTitle");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
