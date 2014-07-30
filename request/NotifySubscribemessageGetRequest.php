<?php
/**
 * TOP API: taobao.notify.subscribemessage.get request
 * 
 * @author auto create
 * @since 1.0, 2011-10-28 00:00:00
 */
class NotifySubscribemessageGetRequest
{
	/** 
	 * 需要返回的字段。具体字段间SubscribeMessage说明
	 **/
	private $fields;
	
	private $apiParas = array();
	
	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function getApiMethodName()
	{
		return "taobao.notify.subscribemessage.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
