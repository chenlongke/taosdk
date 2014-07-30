<?php
/**
 * TOP API: taobao.sns.bind.add request
 * 
 * @author auto create
 * @since 1.0, 2013-09-17 00:00:00
 */
class SnsBindAddRequest
{
	/** 
	 * 匹配上的id串, 淘宝的id在前,新浪的id在后,例如tid1,sid1;tid2,sid2….
	 **/
	private $ids;
	
	private $apiParas = array();
	
	public function setIds($ids)
	{
		$this->ids = $ids;
		$this->apiParas["ids"] = $ids;
	}

	public function getIds()
	{
		return $this->ids;
	}

	public function getApiMethodName()
	{
		return "taobao.sns.bind.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->ids,"ids");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
