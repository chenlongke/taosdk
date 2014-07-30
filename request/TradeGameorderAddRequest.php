<?php
/**
 * TOP API: taobao.trade.gameorder.add request
 * 
 * @author auto create
 * @since 1.0, 2012-10-15 00:00:00
 */
class TradeGameorderAddRequest
{
	/** 
	 * 买家电话号码
	 **/
	private $buyerPhone;
	
	/** 
	 * 收货方式(邮寄post，当面交易face)
	 **/
	private $deliverType;
	
	/** 
	 * 游戏区服
	 **/
	private $gamearea;
	
	/** 
	 * 网游收货角色：数字id
	 **/
	private $id;
	
	/** 
	 * 用户请求ip
	 **/
	private $ip;
	
	/** 
	 * 网游收货角色：等级
	 **/
	private $level;
	
	/** 
	 * 买家 备注
	 **/
	private $memo;
	
	/** 
	 * 网游收货角色：名称
	 **/
	private $name;
	
	/** 
	 * 宝贝数字id
	 **/
	private $numId;
	
	/** 
	 * 网游收货角色：职业
	 **/
	private $occupation;
	
	/** 
	 * 数量
	 **/
	private $quantity;
	
	private $apiParas = array();
	
	public function setBuyerPhone($buyerPhone)
	{
		$this->buyerPhone = $buyerPhone;
		$this->apiParas["buyer_phone"] = $buyerPhone;
	}

	public function getBuyerPhone()
	{
		return $this->buyerPhone;
	}

	public function setDeliverType($deliverType)
	{
		$this->deliverType = $deliverType;
		$this->apiParas["deliver_type"] = $deliverType;
	}

	public function getDeliverType()
	{
		return $this->deliverType;
	}

	public function setGamearea($gamearea)
	{
		$this->gamearea = $gamearea;
		$this->apiParas["gamearea"] = $gamearea;
	}

	public function getGamearea()
	{
		return $this->gamearea;
	}

	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setIp($ip)
	{
		$this->ip = $ip;
		$this->apiParas["ip"] = $ip;
	}

	public function getIp()
	{
		return $this->ip;
	}

	public function setLevel($level)
	{
		$this->level = $level;
		$this->apiParas["level"] = $level;
	}

	public function getLevel()
	{
		return $this->level;
	}

	public function setMemo($memo)
	{
		$this->memo = $memo;
		$this->apiParas["memo"] = $memo;
	}

	public function getMemo()
	{
		return $this->memo;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setNumId($numId)
	{
		$this->numId = $numId;
		$this->apiParas["num_id"] = $numId;
	}

	public function getNumId()
	{
		return $this->numId;
	}

	public function setOccupation($occupation)
	{
		$this->occupation = $occupation;
		$this->apiParas["occupation"] = $occupation;
	}

	public function getOccupation()
	{
		return $this->occupation;
	}

	public function setQuantity($quantity)
	{
		$this->quantity = $quantity;
		$this->apiParas["quantity"] = $quantity;
	}

	public function getQuantity()
	{
		return $this->quantity;
	}

	public function getApiMethodName()
	{
		return "taobao.trade.gameorder.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->deliverType,"deliverType");
		RequestCheckUtil::checkNotNull($this->ip,"ip");
		RequestCheckUtil::checkMaxLength($this->level,20,"level");
		RequestCheckUtil::checkMaxLength($this->memo,60,"memo");
		RequestCheckUtil::checkMaxLength($this->name,60,"name");
		RequestCheckUtil::checkNotNull($this->numId,"numId");
		RequestCheckUtil::checkMinValue($this->numId,1,"numId");
		RequestCheckUtil::checkMaxLength($this->occupation,60,"occupation");
		RequestCheckUtil::checkNotNull($this->quantity,"quantity");
		RequestCheckUtil::checkMinValue($this->quantity,1,"quantity");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
