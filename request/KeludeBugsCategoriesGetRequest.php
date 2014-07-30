<?php
/**
 * TOP API: taobao.kelude.bugs.categories.get request
 * 
 * @author auto create
 * @since 1.0, 2013-12-02 00:00:00
 */
class KeludeBugsCategoriesGetRequest
{
	/** 
	 * 项目空间id
	 **/
	private $versionId;
	
	private $apiParas = array();
	
	public function setVersionId($versionId)
	{
		$this->versionId = $versionId;
		$this->apiParas["version_id"] = $versionId;
	}

	public function getVersionId()
	{
		return $this->versionId;
	}

	public function getApiMethodName()
	{
		return "taobao.kelude.bugs.categories.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->versionId,"versionId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
