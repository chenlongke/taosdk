<?php
/**
 * TOP API: taobao.elink.itemimg.upload request
 * 
 * @author auto create
 * @since 1.0, 2012-03-19 00:00:00
 */
class ElinkItemimgUploadRequest
{
	/** 
	 * E链通商品ID
	 **/
	private $elinkid;
	
	/** 
	 * 商品图片内容(更新图片其他信息时可以不传)。类型:JPG,GIF;大小不超过:1M 
支持的文件类型：gif,jpg,jpeg,png,bmp
	 **/
	private $image;
	
	/** 
	 * 商品图片id(如果是更新图片，则需要传该参数)
	 **/
	private $itemimgId;
	
	/** 
	 * 标识位,图片序号,取值范围(1-5);1（主图），2（第二张图片），3....;最多支持五张图片
	 **/
	private $position;
	
	private $apiParas = array();
	
	public function setElinkid($elinkid)
	{
		$this->elinkid = $elinkid;
		$this->apiParas["elinkid"] = $elinkid;
	}

	public function getElinkid()
	{
		return $this->elinkid;
	}

	public function setImage($image)
	{
		$this->image = $image;
		$this->apiParas["image"] = $image;
	}

	public function getImage()
	{
		return $this->image;
	}

	public function setItemimgId($itemimgId)
	{
		$this->itemimgId = $itemimgId;
		$this->apiParas["itemimg_id"] = $itemimgId;
	}

	public function getItemimgId()
	{
		return $this->itemimgId;
	}

	public function setPosition($position)
	{
		$this->position = $position;
		$this->apiParas["position"] = $position;
	}

	public function getPosition()
	{
		return $this->position;
	}

	public function getApiMethodName()
	{
		return "taobao.elink.itemimg.upload";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->elinkid,"elinkid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
