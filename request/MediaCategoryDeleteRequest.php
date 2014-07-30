<?php
/**
 * TOP API: taobao.media.category.delete request
 * 
 * @author auto create
 * @since 1.0, 2012-11-23 00:00:00
 */
class MediaCategoryDeleteRequest
{
	/** 
	 * 文件分类ID字符串，可以一个也可以一组，用英文逗号间隔，如450,120,155
	 **/
	private $mediaCategoryIds;
	
	private $apiParas = array();
	
	public function setMediaCategoryIds($mediaCategoryIds)
	{
		$this->mediaCategoryIds = $mediaCategoryIds;
		$this->apiParas["media_category_ids"] = $mediaCategoryIds;
	}

	public function getMediaCategoryIds()
	{
		return $this->mediaCategoryIds;
	}

	public function getApiMethodName()
	{
		return "taobao.media.category.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->mediaCategoryIds,100,"mediaCategoryIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
