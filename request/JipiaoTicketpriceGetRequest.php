<?php
/**
 * TOP API: taobao.jipiao.ticketprice.get request
 * 
 * @author auto create
 * @since 1.0, 2012-04-27 00:00:00
 */
class JipiaoTicketpriceGetRequest
{
	/** 
	 * 头等舱：0，商务舱：1，经济舱：2
	 **/
	private $cbClass;
	
	/** 
	 * 航班舱位id
	 **/
	private $cbId;
	
	/** 
	 * 去程舱位类型： 头等舱：0， 商务舱：1， 经济舱：2， 普通特价舱：6， 限售舱：7， 让利舱：8， 特殊：10
	 **/
	private $cbType;
	
	/** 
	 * 外部产品类型
东航：1
深航：2
普通：0
	 **/
	private $exType;
	
	/** 
	 * 航班id
	 **/
	private $flightId;
	
	/** 
	 * 机票提供商id
	 **/
	private $sellerId;
	
	/** 
	 * 特价产品id，如果买的是特价产品才有值
	 **/
	private $spId;
	
	private $apiParas = array();
	
	public function setCbClass($cbClass)
	{
		$this->cbClass = $cbClass;
		$this->apiParas["cb_class"] = $cbClass;
	}

	public function getCbClass()
	{
		return $this->cbClass;
	}

	public function setCbId($cbId)
	{
		$this->cbId = $cbId;
		$this->apiParas["cb_id"] = $cbId;
	}

	public function getCbId()
	{
		return $this->cbId;
	}

	public function setCbType($cbType)
	{
		$this->cbType = $cbType;
		$this->apiParas["cb_type"] = $cbType;
	}

	public function getCbType()
	{
		return $this->cbType;
	}

	public function setExType($exType)
	{
		$this->exType = $exType;
		$this->apiParas["ex_type"] = $exType;
	}

	public function getExType()
	{
		return $this->exType;
	}

	public function setFlightId($flightId)
	{
		$this->flightId = $flightId;
		$this->apiParas["flight_id"] = $flightId;
	}

	public function getFlightId()
	{
		return $this->flightId;
	}

	public function setSellerId($sellerId)
	{
		$this->sellerId = $sellerId;
		$this->apiParas["seller_id"] = $sellerId;
	}

	public function getSellerId()
	{
		return $this->sellerId;
	}

	public function setSpId($spId)
	{
		$this->spId = $spId;
		$this->apiParas["sp_id"] = $spId;
	}

	public function getSpId()
	{
		return $this->spId;
	}

	public function getApiMethodName()
	{
		return "taobao.jipiao.ticketprice.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cbClass,"cbClass");
		RequestCheckUtil::checkNotNull($this->cbId,"cbId");
		RequestCheckUtil::checkNotNull($this->cbType,"cbType");
		RequestCheckUtil::checkNotNull($this->exType,"exType");
		RequestCheckUtil::checkNotNull($this->flightId,"flightId");
		RequestCheckUtil::checkNotNull($this->sellerId,"sellerId");
		RequestCheckUtil::checkNotNull($this->spId,"spId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
