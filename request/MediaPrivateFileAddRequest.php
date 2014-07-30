<?php
/**
 * TOP API: taobao.media.private.file.add request
 * 
 * @author auto create
 * @since 1.0, 2014-02-18 00:00:00
 */
class MediaPrivateFileAddRequest
{
	/** 
	 * 接入多媒体平台的业务code
每个应用有一个特有的业务code
	 **/
	private $bizCode;
	
	/** 
	 * 文件属于的那个目录的目录编号
	 **/
	private $dirId;
	
	/** 
	 * 额外信息
	 **/
	private $ext;
	
	/** 
	 * 文件
	 **/
	private $fileData;
	
	/** 
	 * 上传文件的名称
	 **/
	private $name;
	
	/** 
	 * 文件owner的id
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

	public function setExt($ext)
	{
		$this->ext = $ext;
		$this->apiParas["ext"] = $ext;
	}

	public function getExt()
	{
		return $this->ext;
	}

	public function setFileData($fileData)
	{
		$this->fileData = $fileData;
		$this->apiParas["file_data"] = $fileData;
	}

	public function getFileData()
	{
		return $this->fileData;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
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
		return "taobao.media.private.file.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizCode,"bizCode");
		RequestCheckUtil::checkNotNull($this->dirId,"dirId");
		RequestCheckUtil::checkMinValue($this->dirId,0,"dirId");
		RequestCheckUtil::checkNotNull($this->fileData,"fileData");
		RequestCheckUtil::checkNotNull($this->name,"name");
		RequestCheckUtil::checkMaxLength($this->name,50,"name");
		RequestCheckUtil::checkNotNull($this->ownerId,"ownerId");
		RequestCheckUtil::checkMaxValue($this->ownerId,9223372036854775807,"ownerId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
