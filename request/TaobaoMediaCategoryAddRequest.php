<?php
/**
 * TOP API: Taobao.media.category.add request
 * 
 * @author auto create
 * @since 1.0, 2010-06-07 00:00:00
 */
class TaobaoMediaCategoryAddRequest
{
	/** 
	 * 分类名，最大长度20字符，中英文都算一字符，不能为空
	 **/
	private $mediaCategoryName;
	
	private $apiParas = array();
	
	public function setMediaCategoryName($mediaCategoryName)
	{
		$this->mediaCategoryName = $mediaCategoryName;
		$this->apiParas["media_category_name"] = $mediaCategoryName;
	}

	public function getMediaCategoryName()
	{
		return $this->mediaCategoryName;
	}

	public function getApiMethodName()
	{
		return "Taobao.media.category.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->mediaCategoryName,"mediaCategoryName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
