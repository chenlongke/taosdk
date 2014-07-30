<?php
/**
 * TOP API: taobao.idlesell.item.image.upload request
 * 
 * @author auto create
 * @since 1.0, 2012-03-15 00:00:00
 */
class IdlesellItemImageUploadRequest
{
	/** 
	 * 商品图片内容类型:JPG,GIF;最大长度:500K 。支持的文件类型：gif,jpg,jpeg,png
	 **/
	private $image;
	
	/** 
	 * 是否将该图片设为主图,可选值:true,false;默认值:false(非主图)
	 **/
	private $isMajor;
	
	/** 
	 * 商品数字ID，该参数必须
	 **/
	private $itemId;
	
	/** 
	 * 图片序号
	 **/
	private $position;
	
	private $apiParas = array();
	
	public function setImage($image)
	{
		$this->image = $image;
		$this->apiParas["image"] = $image;
	}

	public function getImage()
	{
		return $this->image;
	}

	public function setIsMajor($isMajor)
	{
		$this->isMajor = $isMajor;
		$this->apiParas["is_major"] = $isMajor;
	}

	public function getIsMajor()
	{
		return $this->isMajor;
	}

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
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
		return "taobao.idlesell.item.image.upload";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->image,"image");
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
