<?php
/**
 * TOP API: taobao.aitaobao.isv.content.detail.get request
 * 
 * @author auto create
 * @since 1.0, 2014-03-27 00:00:00
 */
class AitaobaoIsvContentDetailGetRequest
{
	/** 
	 * 需要返回的字段列表
	 **/
	private $fields;
	
	/** 
	 * 内容id
	 **/
	private $id;
	
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
		return "taobao.aitaobao.isv.content.detail.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkNotNull($this->id,"id");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
