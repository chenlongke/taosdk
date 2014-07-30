<?php
/**
 * TOP API: taobao.kelude.version.update request
 * 
 * @author auto create
 * @since 1.0, 2014-04-08 00:00:00
 */
class KeludeVersionUpdateRequest
{
	/** 
	 * 实际结束时间
	 **/
	private $actualEndDate;
	
	/** 
	 * 项目描述
	 **/
	private $description;
	
	/** 
	 * 期望结束时间
	 **/
	private $expectEndDate;
	
	/** 
	 * 版本的id
	 **/
	private $id;
	
	/** 
	 * 项目名称
	 **/
	private $name;
	
	/** 
	 * 项目的id
	 **/
	private $projectId;
	
	/** 
	 * 开始时间
	 **/
	private $startDate;
	
	private $apiParas = array();
	
	public function setActualEndDate($actualEndDate)
	{
		$this->actualEndDate = $actualEndDate;
		$this->apiParas["actual_end_date"] = $actualEndDate;
	}

	public function getActualEndDate()
	{
		return $this->actualEndDate;
	}

	public function setDescription($description)
	{
		$this->description = $description;
		$this->apiParas["description"] = $description;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function setExpectEndDate($expectEndDate)
	{
		$this->expectEndDate = $expectEndDate;
		$this->apiParas["expect_end_date"] = $expectEndDate;
	}

	public function getExpectEndDate()
	{
		return $this->expectEndDate;
	}

	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
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

	public function setProjectId($projectId)
	{
		$this->projectId = $projectId;
		$this->apiParas["project_id"] = $projectId;
	}

	public function getProjectId()
	{
		return $this->projectId;
	}

	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		$this->apiParas["start_date"] = $startDate;
	}

	public function getStartDate()
	{
		return $this->startDate;
	}

	public function getApiMethodName()
	{
		return "taobao.kelude.version.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->id,"id");
		RequestCheckUtil::checkNotNull($this->name,"name");
		RequestCheckUtil::checkNotNull($this->projectId,"projectId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
