<?php
/**
 * TOP API: taobao.media.nfile.delete request
 * 
 * @author auto create
 * @since 1.0, 2014-01-23 00:00:00
 */
class MediaNfileDeleteRequest
{
	/** 
	 * 图片空间业务biz_code
	 **/
	private $bizCode;
	
	/** 
	 * 文件上传的内容
	 **/
	private $fileIds;
	
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

	public function setFileIds($fileIds)
	{
		$this->fileIds = $fileIds;
		$this->apiParas["file_ids"] = $fileIds;
	}

	public function getFileIds()
	{
		return $this->fileIds;
	}

	public function getApiMethodName()
	{
		return "taobao.media.nfile.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizCode,"bizCode");
		RequestCheckUtil::checkNotNull($this->fileIds,"fileIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
