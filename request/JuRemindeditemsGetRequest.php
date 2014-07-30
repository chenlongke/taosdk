<?php
/**
 * TOP API: taobao.ju.remindeditems.get request
 * 
 * @author auto create
 * @since 1.0, 2013-05-24 00:00:00
 */
class JuRemindeditemsGetRequest
{
	/** 
	 * 提醒类型，1：开团提醒消息；2：占座释放提醒消息
	 **/
	private $remindType;
	
	private $apiParas = array();
	
	public function setRemindType($remindType)
	{
		$this->remindType = $remindType;
		$this->apiParas["remind_type"] = $remindType;
	}

	public function getRemindType()
	{
		return $this->remindType;
	}

	public function getApiMethodName()
	{
		return "taobao.ju.remindeditems.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->remindType,"remindType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
