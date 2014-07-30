<?php
/**
 * TOP API: taobao.jipiao.passenger.add request
 * 
 * @author auto create
 * @since 1.0, 2012-04-27 00:00:00
 */
class JipiaoPassengerAddRequest
{
	/** 
	 * 生日
	 **/
	private $birthday;
	
	/** 
	 * 淘宝昵称，常用乘机人信息需要绑定给指定的淘宝用户
	 **/
	private $buyerNick;
	
	/** 
	 * 证件号码
	 **/
	private $certNo;
	
	/** 
	 * 0：身份证，1：护照，2：学生证，3：军人证，4：回乡证，5：台胞证，6：港澳台胞，7：国际海员，8：外国人永久居留证，9：其他
	 **/
	private $certType;
	
	/** 
	 * 乘机人姓名
	 **/
	private $name;
	
	/** 
	 * 乘机人类型：0：成人，1：儿童，2：婴儿
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setBirthday($birthday)
	{
		$this->birthday = $birthday;
		$this->apiParas["birthday"] = $birthday;
	}

	public function getBirthday()
	{
		return $this->birthday;
	}

	public function setBuyerNick($buyerNick)
	{
		$this->buyerNick = $buyerNick;
		$this->apiParas["buyer_nick"] = $buyerNick;
	}

	public function getBuyerNick()
	{
		return $this->buyerNick;
	}

	public function setCertNo($certNo)
	{
		$this->certNo = $certNo;
		$this->apiParas["cert_no"] = $certNo;
	}

	public function getCertNo()
	{
		return $this->certNo;
	}

	public function setCertType($certType)
	{
		$this->certType = $certType;
		$this->apiParas["cert_type"] = $certType;
	}

	public function getCertType()
	{
		return $this->certType;
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

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.jipiao.passenger.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->birthday,"birthday");
		RequestCheckUtil::checkNotNull($this->buyerNick,"buyerNick");
		RequestCheckUtil::checkNotNull($this->certNo,"certNo");
		RequestCheckUtil::checkNotNull($this->certType,"certType");
		RequestCheckUtil::checkNotNull($this->name,"name");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
