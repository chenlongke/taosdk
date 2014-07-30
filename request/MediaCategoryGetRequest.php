<?php
/**
 * TOP API: taobao.media.category.get request
 * 
 * @author auto create
 * @since 1.0, 2014-02-28 00:00:00
 */
class MediaCategoryGetRequest
{
	/** 
	 * 文件分类ID
	 **/
	private $mediaCategoryId;
	
	/** 
	 * 文件分类名，最大长度50字符，中英文都算一字符，不支持模糊查询
	 **/
	private $mediaCategoryName;
	
	private $apiParas = array();
	
	public function setMediaCategoryId($mediaCategoryId)
	{
		$this->mediaCategoryId = $mediaCategoryId;
		$this->apiParas["media_category_id"] = $mediaCategoryId;
	}

	public function getMediaCategoryId()
	{
		return $this->mediaCategoryId;
	}

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
		return "taobao.media.category.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
