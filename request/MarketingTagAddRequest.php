<?php
/**
 * TOP API: taobao.marketing.tag.add request
 * 
 * @author auto create
 * @since 1.0, 2013-09-04 00:00:00
 */
class MarketingTagAddRequest
{
	/** 
	 * 标签用途描述
	 **/
	private $description;
	
	/** 
	 * 标签名称
	 **/
	private $tagName;
	
	/** 
	 * 标签类型
	 **/
	private $tagType;
	
	private $apiParas = array();
	
	public function setDescription($description)
	{
		$this->description = $description;
		$this->apiParas["description"] = $description;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function setTagName($tagName)
	{
		$this->tagName = $tagName;
		$this->apiParas["tag_name"] = $tagName;
	}

	public function getTagName()
	{
		return $this->tagName;
	}

	public function setTagType($tagType)
	{
		$this->tagType = $tagType;
		$this->apiParas["tag_type"] = $tagType;
	}

	public function getTagType()
	{
		return $this->tagType;
	}

	public function getApiMethodName()
	{
		return "taobao.marketing.tag.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->description,"description");
		RequestCheckUtil::checkNotNull($this->tagName,"tagName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
