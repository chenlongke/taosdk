<?php
/**
 * TOP API: taobao.vmarket.taoma.reverse request
 * 
 * @author auto create
 * @since 1.0, 2014-01-17 00:00:00
 */
class VmarketTaomaReverseRequest
{
	/** 
	 * 买家ID
	 **/
	private $buyerId;
	
	/** 
	 * 操作人ID
	 **/
	private $operatorId;
	
	/** 
	 * 需要验证的验证码
	 **/
	private $reverseCode;
	
	/** 
	 * 冲正数
	 **/
	private $reverseNum;
	
	/** 
	 * 该冲正对应的核销记录的流水号（调用taobao.eticket.consume接口得到的
consume_secial_num）
	 **/
	private $serialNum;
	
	private $apiParas = array();
	
	public function setBuyerId($buyerId)
	{
		$this->buyerId = $buyerId;
		$this->apiParas["buyer_id"] = $buyerId;
	}

	public function getBuyerId()
	{
		return $this->buyerId;
	}

	public function setOperatorId($operatorId)
	{
		$this->operatorId = $operatorId;
		$this->apiParas["operator_id"] = $operatorId;
	}

	public function getOperatorId()
	{
		return $this->operatorId;
	}

	public function setReverseCode($reverseCode)
	{
		$this->reverseCode = $reverseCode;
		$this->apiParas["reverse_code"] = $reverseCode;
	}

	public function getReverseCode()
	{
		return $this->reverseCode;
	}

	public function setReverseNum($reverseNum)
	{
		$this->reverseNum = $reverseNum;
		$this->apiParas["reverse_num"] = $reverseNum;
	}

	public function getReverseNum()
	{
		return $this->reverseNum;
	}

	public function setSerialNum($serialNum)
	{
		$this->serialNum = $serialNum;
		$this->apiParas["serial_num"] = $serialNum;
	}

	public function getSerialNum()
	{
		return $this->serialNum;
	}

	public function getApiMethodName()
	{
		return "taobao.vmarket.taoma.reverse";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->operatorId,"operatorId");
		RequestCheckUtil::checkNotNull($this->reverseNum,"reverseNum");
		RequestCheckUtil::checkNotNull($this->serialNum,"serialNum");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
