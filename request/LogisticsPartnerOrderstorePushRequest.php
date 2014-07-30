<?php
/**
 * TOP API: taobao.logistics.partner.orderstore.push request
 * 
 * @author auto create
 * @since 1.0, 2012-08-28 00:00:00
 */
class LogisticsPartnerOrderstorePushRequest
{
	/** 
	 * 流转状态发生时间
	 **/
	private $occureTime;
	
	/** 
	 * 仓内操作描述
	 **/
	private $operateDetail;
	
	/** 
	 * 快递业务员联系方式
	 **/
	private $operatorContact;
	
	/** 
	 * 快递业务员名称
	 **/
	private $operatorName;
	
	/** 
	 * 仓库名称
	 **/
	private $storeName;
	
	/** 
	 * 淘宝订单交易号
	 **/
	private $tradeId;
	
	private $apiParas = array();
	
	public function setOccureTime($occureTime)
	{
		$this->occureTime = $occureTime;
		$this->apiParas["occure_time"] = $occureTime;
	}

	public function getOccureTime()
	{
		return $this->occureTime;
	}

	public function setOperateDetail($operateDetail)
	{
		$this->operateDetail = $operateDetail;
		$this->apiParas["operate_detail"] = $operateDetail;
	}

	public function getOperateDetail()
	{
		return $this->operateDetail;
	}

	public function setOperatorContact($operatorContact)
	{
		$this->operatorContact = $operatorContact;
		$this->apiParas["operator_contact"] = $operatorContact;
	}

	public function getOperatorContact()
	{
		return $this->operatorContact;
	}

	public function setOperatorName($operatorName)
	{
		$this->operatorName = $operatorName;
		$this->apiParas["operator_name"] = $operatorName;
	}

	public function getOperatorName()
	{
		return $this->operatorName;
	}

	public function setStoreName($storeName)
	{
		$this->storeName = $storeName;
		$this->apiParas["store_name"] = $storeName;
	}

	public function getStoreName()
	{
		return $this->storeName;
	}

	public function setTradeId($tradeId)
	{
		$this->tradeId = $tradeId;
		$this->apiParas["trade_id"] = $tradeId;
	}

	public function getTradeId()
	{
		return $this->tradeId;
	}

	public function getApiMethodName()
	{
		return "taobao.logistics.partner.orderstore.push";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->occureTime,"occureTime");
		RequestCheckUtil::checkNotNull($this->operateDetail,"operateDetail");
		RequestCheckUtil::checkMaxLength($this->operateDetail,200,"operateDetail");
		RequestCheckUtil::checkMaxLength($this->operatorContact,30,"operatorContact");
		RequestCheckUtil::checkMaxLength($this->operatorName,20,"operatorName");
		RequestCheckUtil::checkMaxLength($this->storeName,30,"storeName");
		RequestCheckUtil::checkNotNull($this->tradeId,"tradeId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
