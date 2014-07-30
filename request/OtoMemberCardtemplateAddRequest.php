<?php
/**
 * TOP API: taobao.oto.member.cardtemplate.add request
 * 
 * @author auto create
 * @since 1.0, 2013-12-10 00:00:00
 */
class OtoMemberCardtemplateAddRequest
{
	/** 
	 * 绑定说明
	 **/
	private $bindingDesc;
	
	/** 
	 * 权益说明
	 **/
	private $cardDesc;
	
	/** 
	 * 默认图片地址
	 **/
	private $defaultBackUrl;
	
	/** 
	 * 商户名称
	 **/
	private $merchantNick;
	
	/** 
	 * 会员卡模板名称
	 **/
	private $name;
	
	/** 
	 * 模板类型
	 **/
	private $type;
	
	/** 
	 * 权重
	 **/
	private $weight;
	
	private $apiParas = array();
	
	public function setBindingDesc($bindingDesc)
	{
		$this->bindingDesc = $bindingDesc;
		$this->apiParas["binding_desc"] = $bindingDesc;
	}

	public function getBindingDesc()
	{
		return $this->bindingDesc;
	}

	public function setCardDesc($cardDesc)
	{
		$this->cardDesc = $cardDesc;
		$this->apiParas["card_desc"] = $cardDesc;
	}

	public function getCardDesc()
	{
		return $this->cardDesc;
	}

	public function setDefaultBackUrl($defaultBackUrl)
	{
		$this->defaultBackUrl = $defaultBackUrl;
		$this->apiParas["default_back_url"] = $defaultBackUrl;
	}

	public function getDefaultBackUrl()
	{
		return $this->defaultBackUrl;
	}

	public function setMerchantNick($merchantNick)
	{
		$this->merchantNick = $merchantNick;
		$this->apiParas["merchant_nick"] = $merchantNick;
	}

	public function getMerchantNick()
	{
		return $this->merchantNick;
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

	public function setWeight($weight)
	{
		$this->weight = $weight;
		$this->apiParas["weight"] = $weight;
	}

	public function getWeight()
	{
		return $this->weight;
	}

	public function getApiMethodName()
	{
		return "taobao.oto.member.cardtemplate.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bindingDesc,"bindingDesc");
		RequestCheckUtil::checkNotNull($this->cardDesc,"cardDesc");
		RequestCheckUtil::checkNotNull($this->defaultBackUrl,"defaultBackUrl");
		RequestCheckUtil::checkNotNull($this->merchantNick,"merchantNick");
		RequestCheckUtil::checkMaxLength($this->merchantNick,60,"merchantNick");
		RequestCheckUtil::checkNotNull($this->name,"name");
		RequestCheckUtil::checkMaxLength($this->name,60,"name");
		RequestCheckUtil::checkNotNull($this->type,"type");
		RequestCheckUtil::checkMaxLength($this->type,20,"type");
		RequestCheckUtil::checkNotNull($this->weight,"weight");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
