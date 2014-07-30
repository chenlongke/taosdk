<?php
/**
 * TOP API: taobao.aitaobao.isv.content.delete request
 * 
 * @author auto create
 * @since 1.0, 2014-03-27 00:00:00
 */
class AitaobaoIsvContentDeleteRequest
{
	/** 
	 * 内容id
	 **/
	private $id;
	
	private $apiParas = array();
	
	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getApiMethodName()
	{
		return "taobao.aitaobao.isv.content.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->id,"id");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
