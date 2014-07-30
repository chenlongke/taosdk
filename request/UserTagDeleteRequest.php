<?php
/**
 * TOP API: taobao.user.tag.delete request
 * 
 * @author auto create
 * @since 1.0, 2012-11-09 00:00:00
 */
class UserTagDeleteRequest
{
	/** 
	 * 标签名称，可选值：resume_inventory（交易取消后恢复库存）
	 **/
	private $tagName;
	
	private $apiParas = array();
	
	public function setTagName($tagName)
	{
		$this->tagName = $tagName;
		$this->apiParas["tag_name"] = $tagName;
	}

	public function getTagName()
	{
		return $this->tagName;
	}

	public function getApiMethodName()
	{
		return "taobao.user.tag.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->tagName,"tagName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
