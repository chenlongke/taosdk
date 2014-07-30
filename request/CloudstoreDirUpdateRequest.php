<?php
/**
 * TOP API: taobao.cloudstore.dir.update request
 * 
 * @author auto create
 * @since 1.0, 2012-07-12 00:00:00
 */
class CloudstoreDirUpdateRequest
{
	/** 
	 * 媒体文件分类编号
	 **/
	private $dirId;
	
	/** 
	 * 媒体文件分类名称
	 **/
	private $dirName;
	
	private $apiParas = array();
	
	public function setDirId($dirId)
	{
		$this->dirId = $dirId;
		$this->apiParas["dir_id"] = $dirId;
	}

	public function getDirId()
	{
		return $this->dirId;
	}

	public function setDirName($dirName)
	{
		$this->dirName = $dirName;
		$this->apiParas["dir_name"] = $dirName;
	}

	public function getDirName()
	{
		return $this->dirName;
	}

	public function getApiMethodName()
	{
		return "taobao.cloudstore.dir.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->dirId,"dirId");
		RequestCheckUtil::checkNotNull($this->dirName,"dirName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
