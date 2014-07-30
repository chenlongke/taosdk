<?php
/**
 * TOP API: taobao.fang.picture.upload request
 * 
 * @author auto create
 * @since 1.0, 2013-08-12 00:00:00
 */
class FangPictureUploadRequest
{
	/** 
	 * 图片数据
	 **/
	private $imageData;
	
	private $apiParas = array();
	
	public function setImageData($imageData)
	{
		$this->imageData = $imageData;
		$this->apiParas["image_data"] = $imageData;
	}

	public function getImageData()
	{
		return $this->imageData;
	}

	public function getApiMethodName()
	{
		return "taobao.fang.picture.upload";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->imageData,"imageData");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
