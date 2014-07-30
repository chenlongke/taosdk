<?php
/**
 * TOP API: taobao.oto.member.card.update request
 * 
 * @author auto create
 * @since 1.0, 2014-01-17 00:00:00
 */
class OtoMemberCardUpdateRequest
{
	/** 
	 * 地址
	 **/
	private $address;
	
	/** 
	 * 申领时间
	 **/
	private $applyTime;
	
	/** 
	 * 会员卡卡号
	 **/
	private $cardNum;
	
	/** 
	 * 会员卡类型
	 **/
	private $cardType;
	
	/** 
	 * 邮箱地址
	 **/
	private $email;
	
	/** 
	 * 性别，m表示男，f表示女，空表示保密
	 **/
	private $gender;
	
	/** 
	 * 会员身份证号码
	 **/
	private $idCard;
	
	/** 
	 * 会员卡名称
	 **/
	private $name;
	
	/** 
	 * 会员电话
	 **/
	private $phone;
	
	/** 
	 * 会员卡积分
	 **/
	private $points;
	
	/** 
	 * 用户真实姓名
	 **/
	private $userName;
	
	private $apiParas = array();
	
	public function setAddress($address)
	{
		$this->address = $address;
		$this->apiParas["address"] = $address;
	}

	public function getAddress()
	{
		return $this->address;
	}

	public function setApplyTime($applyTime)
	{
		$this->applyTime = $applyTime;
		$this->apiParas["apply_time"] = $applyTime;
	}

	public function getApplyTime()
	{
		return $this->applyTime;
	}

	public function setCardNum($cardNum)
	{
		$this->cardNum = $cardNum;
		$this->apiParas["card_num"] = $cardNum;
	}

	public function getCardNum()
	{
		return $this->cardNum;
	}

	public function setCardType($cardType)
	{
		$this->cardType = $cardType;
		$this->apiParas["card_type"] = $cardType;
	}

	public function getCardType()
	{
		return $this->cardType;
	}

	public function setEmail($email)
	{
		$this->email = $email;
		$this->apiParas["email"] = $email;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setGender($gender)
	{
		$this->gender = $gender;
		$this->apiParas["gender"] = $gender;
	}

	public function getGender()
	{
		return $this->gender;
	}

	public function setIdCard($idCard)
	{
		$this->idCard = $idCard;
		$this->apiParas["id_card"] = $idCard;
	}

	public function getIdCard()
	{
		return $this->idCard;
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

	public function setPhone($phone)
	{
		$this->phone = $phone;
		$this->apiParas["phone"] = $phone;
	}

	public function getPhone()
	{
		return $this->phone;
	}

	public function setPoints($points)
	{
		$this->points = $points;
		$this->apiParas["points"] = $points;
	}

	public function getPoints()
	{
		return $this->points;
	}

	public function setUserName($userName)
	{
		$this->userName = $userName;
		$this->apiParas["user_name"] = $userName;
	}

	public function getUserName()
	{
		return $this->userName;
	}

	public function getApiMethodName()
	{
		return "taobao.oto.member.card.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->address,256,"address");
		RequestCheckUtil::checkNotNull($this->cardNum,"cardNum");
		RequestCheckUtil::checkMaxLength($this->cardNum,30,"cardNum");
		RequestCheckUtil::checkMaxLength($this->cardType,20,"cardType");
		RequestCheckUtil::checkMaxLength($this->gender,10,"gender");
		RequestCheckUtil::checkMaxLength($this->idCard,18,"idCard");
		RequestCheckUtil::checkMaxLength($this->name,60,"name");
		RequestCheckUtil::checkMaxLength($this->phone,18,"phone");
		RequestCheckUtil::checkMaxLength($this->userName,32,"userName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
