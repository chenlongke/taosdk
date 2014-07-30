<?php
/**
 * TOP API: taobao.cloudstore.file.delete request
 * 
 * @author auto create
 * @since 1.0, 2012-07-12 00:00:00
 */
class CloudstoreFileDeleteRequest
{
	/** 
	 * 文件编号数组,可以一个也可以一组,用英文逗号间隔,如450,120,155
	 **/
	private $fileIds;
	
	private $apiParas = array();
	
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
		return "taobao.cloudstore.file.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fileIds,"fileIds");
		RequestCheckUtil::checkMaxListSize($this->fileIds,100,"fileIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
