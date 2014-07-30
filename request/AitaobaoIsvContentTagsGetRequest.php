<?php
/**
 * TOP API: taobao.aitaobao.isv.content.tags.get request
 * 
 * @author auto create
 * @since 1.0, 2014-03-27 00:00:00
 */
class AitaobaoIsvContentTagsGetRequest
{
	/** 
	 * 内容的频道id
	 **/
	private $channelId;
	
	/** 
	 * 需要返回的字段
	 **/
	private $fields;
	
	/** 
	 * 内容的标签id，可选，id有值时表示获取该标签的子标签
	 **/
	private $tagId;
	
	/** 
	 * 内容类型id
	 **/
	private $typeId;
	
	private $apiParas = array();
	
	public function setChannelId($channelId)
	{
		$this->channelId = $channelId;
		$this->apiParas["channel_id"] = $channelId;
	}

	public function getChannelId()
	{
		return $this->channelId;
	}

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setTagId($tagId)
	{
		$this->tagId = $tagId;
		$this->apiParas["tag_id"] = $tagId;
	}

	public function getTagId()
	{
		return $this->tagId;
	}

	public function setTypeId($typeId)
	{
		$this->typeId = $typeId;
		$this->apiParas["type_id"] = $typeId;
	}

	public function getTypeId()
	{
		return $this->typeId;
	}

	public function getApiMethodName()
	{
		return "taobao.aitaobao.isv.content.tags.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->channelId,"channelId");
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkNotNull($this->typeId,"typeId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
