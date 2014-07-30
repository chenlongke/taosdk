<?php
/**
 * TOP API: taobao.kelude.project.get request
 * 
 * @author auto create
 * @since 1.0, 2014-04-01 00:00:00
 */
class KeludeProjectGetRequest
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
		return "taobao.kelude.project.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
