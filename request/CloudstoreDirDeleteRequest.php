<?php
/**
 * TOP API: taobao.cloudstore.dir.delete request
 * 
 * @author auto create
 * @since 1.0, 2012-07-12 00:00:00
 */
class CloudstoreDirDeleteRequest
{
	/** 
	 * 文件分类编号
	 **/
	private $dirId;
	
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

	public function getApiMethodName()
	{
		return "taobao.cloudstore.dir.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->dirId,"dirId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
