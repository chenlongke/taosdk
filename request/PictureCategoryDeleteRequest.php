<?php
/**
 * TOP API: taobao.picture.category.delete request
 * 
 * @author auto create
 * @since 1.0, 2012-11-23 00:00:00
 */
class PictureCategoryDeleteRequest
{
	/** 
	 * 图片分类ID字符串,可以一个也可以一组,用英文逗号间隔,如450,120,155
	 **/
	private $pictureCategoryIds;
	
	private $apiParas = array();
	
	public function setPictureCategoryIds($pictureCategoryIds)
	{
		$this->pictureCategoryIds = $pictureCategoryIds;
		$this->apiParas["picture_category_ids"] = $pictureCategoryIds;
	}

	public function getPictureCategoryIds()
	{
		return $this->pictureCategoryIds;
	}

	public function getApiMethodName()
	{
		return "taobao.picture.category.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->pictureCategoryIds,"pictureCategoryIds");
		RequestCheckUtil::checkMaxListSize($this->pictureCategoryIds,100,"pictureCategoryIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
