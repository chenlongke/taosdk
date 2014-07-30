<?php
/**
 * TOP API: taobao.media.private.dir.delete request
 * 
 * @author auto create
 * @since 1.0, 2014-02-18 00:00:00
 */
class MediaPrivateDirDeleteRequest
{
	/** 
	 * 接入多媒体平台的业务code 每个应用有一个特有的业务code
	 **/
	private $bizCode;
	
	/** 
	 * 目录id
	 **/
	private $dirId;
	
	/** 
	 * owner_id
	 **/
	private $ownerId;
	
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

	public function setOwnerId($ownerId)
	{
		$this->ownerId = $ownerId;
		$this->apiParas["owner_id"] = $ownerId;
	}

	public function getOwnerId()
	{
		return $this->ownerId;
	}

	public function getApiMethodName()
	{
		return "taobao.media.private.dir.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizCode,"bizCode");
		RequestCheckUtil::checkNotNull($this->dirId,"dirId");
		RequestCheckUtil::checkMinValue($this->dirId,1,"dirId");
		RequestCheckUtil::checkNotNull($this->ownerId,"ownerId");
		RequestCheckUtil::checkMaxValue($this->ownerId,9223372036854775807,"ownerId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
