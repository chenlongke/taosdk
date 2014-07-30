<?php
/**
 * TOP API: taobao.kelude.version.create request
 * 
 * @author auto create
 * @since 1.0, 2014-04-02 00:00:00
 */
class KeludeVersionCreateRequest
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
	 * 预期结束时间
	 **/
	private $expectEndDate;
	
	/** 
	 * 项目名
	 **/
	private $name;
	
	/** 
	 * 项目id
	 **/
	private $projectId;
	
	/** 
	 * 开始时间
	 **/
	private $startDate;
	
	/** 
	 * 作者
	 **/
	private $userId;
	
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

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "taobao.kelude.version.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->name,"name");
		RequestCheckUtil::checkNotNull($this->projectId,"projectId");
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
