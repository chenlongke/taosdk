<?php
/**
 * TOP API: tmall.oto.pwcheck.get request
 * 
 * @author auto create
 * @since 1.0, 2013-02-26 00:00:00
 */
class TmallOtoPwcheckGetRequest
{
	/** 
	 * 天猫发行的权益卡号ID
	 **/
	private $cardId;
	
	/** 
	 * 商家线下门店小二登录天猫的帐号id
	 **/
	private $operactorId;
	
	/** 
	 * 天猫官方发行的权益卡密码
	 **/
	private $password;
	
	private $apiParas = array();
	
	public function setCardId($cardId)
	{
		$this->cardId = $cardId;
		$this->apiParas["card_id"] = $cardId;
	}

	public function getCardId()
	{
		return $this->cardId;
	}

	public function setOperactorId($operactorId)
	{
		$this->operactorId = $operactorId;
		$this->apiParas["operactor_id"] = $operactorId;
	}

	public function getOperactorId()
	{
		return $this->operactorId;
	}

	public function setPassword($password)
	{
		$this->password = $password;
		$this->apiParas["password"] = $password;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function getApiMethodName()
	{
		return "tmall.oto.pwcheck.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cardId,"cardId");
		RequestCheckUtil::checkNotNull($this->operactorId,"operactorId");
		RequestCheckUtil::checkNotNull($this->password,"password");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
