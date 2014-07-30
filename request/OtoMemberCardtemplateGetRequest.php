<?php
/**
 * TOP API: taobao.oto.member.cardtemplate.get request
 * 
 * @author auto create
 * @since 1.0, 2013-12-10 00:00:00
 */
class OtoMemberCardtemplateGetRequest
{
	/** 
	 * 会员卡模板ID
	 **/
	private $cardTemplateId;
	
	/** 
	 * 商户ID，在新增会员卡模板时会返回这个字段的值
	 **/
	private $merchantId;
	
	/** 
	 * 会员卡模板名称
	 **/
	private $name;
	
	/** 
	 * 模板类型
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setCardTemplateId($cardTemplateId)
	{
		$this->cardTemplateId = $cardTemplateId;
		$this->apiParas["card_template_id"] = $cardTemplateId;
	}

	public function getCardTemplateId()
	{
		return $this->cardTemplateId;
	}

	public function setMerchantId($merchantId)
	{
		$this->merchantId = $merchantId;
		$this->apiParas["merchant_id"] = $merchantId;
	}

	public function getMerchantId()
	{
		return $this->merchantId;
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
		return "taobao.oto.member.cardtemplate.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->merchantId,"merchantId");
		RequestCheckUtil::checkMaxLength($this->name,60,"name");
		RequestCheckUtil::checkMaxLength($this->type,20,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
