<?php
/**
 * TOP API: taobao.ewuliu.delivery.template.get request
 * 
 * @author auto create
 * @since 1.0, 2014-02-27 00:00:00
 */
class EwuliuDeliveryTemplateGetRequest
{
	/** 
	 * 模板ID
	 **/
	private $templateId;
	
	private $apiParas = array();
	
	public function setTemplateId($templateId)
	{
		$this->templateId = $templateId;
		$this->apiParas["template_id"] = $templateId;
	}

	public function getTemplateId()
	{
		return $this->templateId;
	}

	public function getApiMethodName()
	{
		return "taobao.ewuliu.delivery.template.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->templateId,"templateId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
