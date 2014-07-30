<?php
/**
 * TOP API: taobao.diamond.user.check request
 * 
 * @author auto create
 * @since 1.0, 2013-08-29 00:00:00
 */
class DiamondUserCheckRequest
{
	/** 
	 * 是否关心黑名单
	 **/
	private $careBacklist;
	
	/** 
	 * 淘宝用户数字Id
	 **/
	private $tbNumId;
	
	private $apiParas = array();
	
	public function setCareBacklist($careBacklist)
	{
		$this->careBacklist = $careBacklist;
		$this->apiParas["care_backlist"] = $careBacklist;
	}

	public function getCareBacklist()
	{
		return $this->careBacklist;
	}

	public function setTbNumId($tbNumId)
	{
		$this->tbNumId = $tbNumId;
		$this->apiParas["tb_num_id"] = $tbNumId;
	}

	public function getTbNumId()
	{
		return $this->tbNumId;
	}

	public function getApiMethodName()
	{
		return "taobao.diamond.user.check";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->careBacklist,"careBacklist");
		RequestCheckUtil::checkNotNull($this->tbNumId,"tbNumId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
