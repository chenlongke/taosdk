<?php
/**
 * TOP API: taobao.kelude.project.create request
 * 
 * @author auto create
 * @since 1.0, 2014-04-01 00:00:00
 */
class KeludeProjectCreateRequest
{
	/** 
	 * 公司id
	 **/
	private $companyId;
	
	/** 
	 * 项目的描述
	 **/
	private $description;
	
	/** 
	 * 唯一标识
	 **/
	private $identifier;
	
	/** 
	 * 项目的名字，模糊查询
	 **/
	private $name;
	
	/** 
	 * 产品线id
	 **/
	private $productlineId;
	
	/** 
	 * 公开私有，0为公开，1为私有
	 **/
	private $scope;
	
	/** 
	 * 项目的标识。Project和Daily，不传的话默认设置为Project
	 **/
	private $stamp;
	
	/** 
	 * 作者的id
	 **/
	private $userId;
	
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

	public function setStamp($stamp)
	{
		$this->stamp = $stamp;
		$this->apiParas["stamp"] = $stamp;
	}

	public function getStamp()
	{
		return $this->stamp;
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
		return "taobao.kelude.project.create";
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
