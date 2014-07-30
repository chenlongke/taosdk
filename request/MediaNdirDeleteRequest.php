<?php
/**
 * TOP API: taobao.media.ndir.delete request
 * 
 * @author auto create
 * @since 1.0, 2014-01-23 00:00:00
 */
class MediaNdirDeleteRequest
{
	/** 
	 * 多媒体应用接入biz_code
	 **/
	private $bizCode;
	
	/** 
	 * 文件目录id
	 **/
	private $dirId;
	
	private $apiParas = array();
	
	public function setBizCode($bizCode)
	{
		$this->bizCode = $bizCode;
		$this->apiParas["biz_code"] = $bizCode;
	}

	public function getBizCode()
	{
		return $this->bizCode;
	}

	public function setDirId($dirId)
	{
		$this->dirId = $dirId;
		$this->apiParas["dir_id"] = $dirId;
	}

	public function getDirId()
	{
		return $this->dirId;
	}

	public function getApiMethodName()
	{
		return "taobao.media.ndir.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizCode,"bizCode");
		RequestCheckUtil::checkNotNull($this->dirId,"dirId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
