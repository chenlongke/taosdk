<?php
/**
 * TOP API: taobao.kelude.issue.requiredpropertylist.get request
 * 
 * @author auto create
 * @since 1.0, 2014-04-01 00:00:00
 */
class KeludeIssueRequiredpropertylistGetRequest
{
	/** 
	 * 项目ID
	 **/
	private $projectId;
	
	/** 
	 * 模板ID
	 **/
	private $templateId;
	
	/** 
	 * 用户
	 **/
	private $user;
	
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

	public function setTemplateId($templateId)
	{
		$this->templateId = $templateId;
		$this->apiParas["template_id"] = $templateId;
	}

	public function getTemplateId()
	{
		return $this->templateId;
	}

	public function setUser($user)
	{
		$this->user = $user;
		$this->apiParas["user"] = $user;
	}

	public function getUser()
	{
		return $this->user;
	}

	public function getApiMethodName()
	{
		return "taobao.kelude.issue.requiredpropertylist.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->projectId,"projectId");
		RequestCheckUtil::checkNotNull($this->templateId,"templateId");
		RequestCheckUtil::checkNotNull($this->user,"user");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
