<?php
/**
 * TOP API: taobao.jipiao.order.update request
 * 
 * @author auto create
 * @since 1.0, 2012-04-27 00:00:00
 */
class JipiaoOrderUpdateRequest
{
	/** 
	 * 订单id
	 **/
	private $orderId;
	
	/** 
	 * 联系人列表，其中每一个联系人信息以分号分隔，包括：passengerId，passenger_name，passenger_ctype，（0：身份证，1：护照，2：学生证，3：军人证，4：回乡证，5：台胞证，6：港澳台胞，7：国际海员，8：外国人永久居留证，9：其他）passenger_cno，passenger_birthday（yyyy-MM-dd），

passengerId：如果有值，表示是选择的某个常用乘机人，如果没有值，表示新增的乘机人
	 **/
	private $passengers;
	
	/** 
	 * 联系人邮箱
	 **/
	private $relationEmail;
	
	/** 
	 * 联系人姓名
	 **/
	private $relationName;
	
	/** 
	 * 联系人电话
	 **/
	private $relationTel;
	
	/** 
	 * 联系人旺旺
	 **/
	private $relationWw;
	
	/** 
	 * 配送行程单地址 格式为：省,市,区,地址
	 **/
	private $trafficAddr;
	
	/** 
	 * 接收人电话
	 **/
	private $trafficPhone;
	
	/** 
	 * 邮编
	 **/
	private $trafficPost;
	
	/** 
	 * 配送接收人
	 **/
	private $trafficReceiver;
	
	private $apiParas = array();
	
	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function setPassengers($passengers)
	{
		$this->passengers = $passengers;
		$this->apiParas["passengers"] = $passengers;
	}

	public function getPassengers()
	{
		return $this->passengers;
	}

	public function setRelationEmail($relationEmail)
	{
		$this->relationEmail = $relationEmail;
		$this->apiParas["relation_email"] = $relationEmail;
	}

	public function getRelationEmail()
	{
		return $this->relationEmail;
	}

	public function setRelationName($relationName)
	{
		$this->relationName = $relationName;
		$this->apiParas["relation_name"] = $relationName;
	}

	public function getRelationName()
	{
		return $this->relationName;
	}

	public function setRelationTel($relationTel)
	{
		$this->relationTel = $relationTel;
		$this->apiParas["relation_tel"] = $relationTel;
	}

	public function getRelationTel()
	{
		return $this->relationTel;
	}

	public function setRelationWw($relationWw)
	{
		$this->relationWw = $relationWw;
		$this->apiParas["relation_ww"] = $relationWw;
	}

	public function getRelationWw()
	{
		return $this->relationWw;
	}

	public function setTrafficAddr($trafficAddr)
	{
		$this->trafficAddr = $trafficAddr;
		$this->apiParas["traffic_addr"] = $trafficAddr;
	}

	public function getTrafficAddr()
	{
		return $this->trafficAddr;
	}

	public function setTrafficPhone($trafficPhone)
	{
		$this->trafficPhone = $trafficPhone;
		$this->apiParas["traffic_phone"] = $trafficPhone;
	}

	public function getTrafficPhone()
	{
		return $this->trafficPhone;
	}

	public function setTrafficPost($trafficPost)
	{
		$this->trafficPost = $trafficPost;
		$this->apiParas["traffic_post"] = $trafficPost;
	}

	public function getTrafficPost()
	{
		return $this->trafficPost;
	}

	public function setTrafficReceiver($trafficReceiver)
	{
		$this->trafficReceiver = $trafficReceiver;
		$this->apiParas["traffic_receiver"] = $trafficReceiver;
	}

	public function getTrafficReceiver()
	{
		return $this->trafficReceiver;
	}

	public function getApiMethodName()
	{
		return "taobao.jipiao.order.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->orderId,"orderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
