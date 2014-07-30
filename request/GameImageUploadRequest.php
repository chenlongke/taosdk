<?php
/**
 * TOP API: taobao.game.image.upload request
 * 
 * @author auto create
 * @since 1.0, 2012-12-04 00:00:00
 */
class GameImageUploadRequest
{
	/** 
	 * 宝贝所属的类目ID(游戏ID)
	 **/
	private $cid;
	
	/** 
	 * 上传的图片
	 **/
	private $image;
	
	/** 
	 * 宝贝的数字ID
	 **/
	private $numIid;
	
	/** 
	 * 上传的图片所属的垂直属性，属性值不需要填，因为值是image传递过来的
	 **/
	private $props;
	
	private $apiParas = array();
	
	public function setCid($cid)
	{
		$this->cid = $cid;
		$this->apiParas["cid"] = $cid;
	}

	public function getCid()
	{
		return $this->cid;
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

	public function setNumIid($numIid)
	{
		$this->numIid = $numIid;
		$this->apiParas["num_iid"] = $numIid;
	}

	public function getNumIid()
	{
		return $this->numIid;
	}

	public function setProps($props)
	{
		$this->props = $props;
		$this->apiParas["props"] = $props;
	}

	public function getProps()
	{
		return $this->props;
	}

	public function getApiMethodName()
	{
		return "taobao.game.image.upload";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cid,"cid");
		RequestCheckUtil::checkNotNull($this->image,"image");
		RequestCheckUtil::checkNotNull($this->numIid,"numIid");
		RequestCheckUtil::checkNotNull($this->props,"props");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
