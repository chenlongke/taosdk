<?php
/**
 * TOP API: taobao.kelude.project.update request
 * 
 * @author auto create
 * @since 1.0, 2014-04-01 00:00:00
 */
class KeludeProjectUpdateRequest
{
	/** 
	 * 公司的id
	 **/
	private $companyId;
	
	/** 
	 * 项目描述，设置为null时不更新这个字段
	 **/
	private $description;
	
	/** 
	 * 项目的id
	 **/
	private $id;
	
	/** 
	 * 项目唯一标识，设置为null时不更新这个字段
	 **/
	private $identifier;
	
	/** 
	 * 项目名称，设置为null时不更新这个字段
	 **/
	private $name;
	
	/** 
	 * 产品线id,设置为null时不更新这个字段
	 **/
	private $productlineId;
	
	/** 
	 * 项目私有公有状态，0表示共有，1表示私有，设置为null时不更新这个字段
	 **/
	private $scope;
	
	/** 
	 * 更新人的id，不填的话记录不了修改历史
	 **/
	private $updateUserId;
	
	private $apiParas = array();
	
	public function setCompanyId($companyId)
	{
		$this->companyId = $companyId;
		$this->apiParas["company_id"] = $companyId;
	}

	public function getCompanyId()
	{
		return $this->companyId;
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

	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setIdentifier($identifier)
	{
		$this->identifier = $identifier;
		$this->apiParas["identifier"] = $identifier;
	}

	public function getIdentifier()
	{
		return $this->identifier;
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

	public function setProductlineId($productlineId)
	{
		$this->productlineId = $productlineId;
		$this->apiParas["productline_id"] = $productlineId;
	}

	public function getProductlineId()
	{
		return $this->productlineId;
	}

	public function setScope($scope)
	{
		$this->scope = $scope;
		$this->apiParas["scope"] = $scope;
	}

	public function getScope()
	{
		return $this->scope;
	}

	public function setUpdateUserId($updateUserId)
	{
		$this->updateUserId = $updateUserId;
		$this->apiParas["update_user_id"] = $updateUserId;
	}

	public function getUpdateUserId()
	{
		return $this->updateUserId;
	}

	public function getApiMethodName()
	{
		return "taobao.kelude.project.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->companyId,"companyId");
		RequestCheckUtil::checkNotNull($this->id,"id");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
