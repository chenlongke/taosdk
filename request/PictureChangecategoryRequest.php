<?php
/**
 * TOP API: taobao.picture.changecategory request
 * 
 * @author auto create
 * @since 1.0, 2012-11-23 00:00:00
 */
class PictureChangecategoryRequest
{
	/** 
	 * 目标分类的id
	 **/
	private $pictureCategoryId;
	
	/** 
	 * 要移动的图片的id
	 **/
	private $pictureIds;
	
	private $apiParas = array();
	
	public function setPictureCategoryId($pictureCategoryId)
	{
		$this->pictureCategoryId = $pictureCategoryId;
		$this->apiParas["picture_category_id"] = $pictureCategoryId;
	}

	public function getPictureCategoryId()
	{
		return $this->pictureCategoryId;
	}

	public function setPictureIds($pictureIds)
	{
		$this->pictureIds = $pictureIds;
		$this->apiParas["picture_ids"] = $pictureIds;
	}

	public function getPictureIds()
	{
		return $this->pictureIds;
	}

	public function getApiMethodName()
	{
		return "taobao.picture.changecategory";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->pictureCategoryId,"pictureCategoryId");
		RequestCheckUtil::checkNotNull($this->pictureIds,"pictureIds");
		RequestCheckUtil::checkMaxListSize($this->pictureIds,1000,"pictureIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
