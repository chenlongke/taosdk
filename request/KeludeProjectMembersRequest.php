<?php
/**
 * TOP API: taobao.kelude.project.members request
 * 
 * @author auto create
 * @since 1.0, 2014-04-10 00:00:00
 */
class KeludeProjectMembersRequest
{
	/** 
	 * 项目id
	 **/
	private $projectId;
	
	private $apiParas = array();
	
	public function setProjectId($projectId)
	{
		$this->projectId = $projectId;
		$this->apiParas["project_id"] = $projectId;
	}

	public function getProjectId()
	{
		return $this->projectId;
	}

	public function getApiMethodName()
	{
		return "taobao.kelude.project.members";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->projectId,"projectId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
