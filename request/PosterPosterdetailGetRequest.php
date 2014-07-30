<?php
/**
 * TOP API: taobao.poster.posterdetail.get request
 * 
 * @author auto create
 * @since 1.0, 2013-02-26 00:00:00
 */
class PosterPosterdetailGetRequest
{
	/** 
	 * 画报id
	 **/
	private $posterId;
	
	private $apiParas = array();
	
	public function setPosterId($posterId)
	{
		$this->posterId = $posterId;
		$this->apiParas["poster_id"] = $posterId;
	}

	public function getPosterId()
	{
		return $this->posterId;
	}

	public function getApiMethodName()
	{
		return "taobao.poster.posterdetail.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->posterId,"posterId");
		RequestCheckUtil::checkMaxValue($this->posterId,2147483646,"posterId");
		RequestCheckUtil::checkMinValue($this->posterId,1,"posterId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
