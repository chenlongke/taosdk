<?php
/**
 * TOP API: taobao.lifeplace.sotrereview.get request
 * 
 * @author auto create
 * @since 1.0, 2012-08-23 00:00:00
 */
class LifeplaceSotrereviewGetRequest
{
	/** 
	 * 城市id
	 **/
	private $cityid;
	
	/** 
	 * 图文点评中图片的高度(默认100）
	 **/
	private $imgh;
	
	/** 
	 * 图文点评中图片的宽度(默认100）
	 **/
	private $imgw;
	
	/** 
	 * 点评id
	 **/
	private $reviewid;
	
	private $apiParas = array();
	
	public function setCityid($cityid)
	{
		$this->cityid = $cityid;
		$this->apiParas["cityid"] = $cityid;
	}

	public function getCityid()
	{
		return $this->cityid;
	}

	public function setImgh($imgh)
	{
		$this->imgh = $imgh;
		$this->apiParas["imgh"] = $imgh;
	}

	public function getImgh()
	{
		return $this->imgh;
	}

	public function setImgw($imgw)
	{
		$this->imgw = $imgw;
		$this->apiParas["imgw"] = $imgw;
	}

	public function getImgw()
	{
		return $this->imgw;
	}

	public function setReviewid($reviewid)
	{
		$this->reviewid = $reviewid;
		$this->apiParas["reviewid"] = $reviewid;
	}

	public function getReviewid()
	{
		return $this->reviewid;
	}

	public function getApiMethodName()
	{
		return "taobao.lifeplace.sotrereview.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->reviewid,"reviewid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
