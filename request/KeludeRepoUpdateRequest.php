<?php
/**
 * TOP API: taobao.kelude.repo.update request
 * 
 * @author auto create
 * @since 1.0, 2014-04-15 00:00:00
 */
class KeludeRepoUpdateRequest
{
	/** 
	 * 应用名
	 **/
	private $appName;
	
	/** 
	 * 代码库ID
	 **/
	private $id;
	
	/** 
	 * 代码库完整地址
	 **/
	private $repoPath;
	
	/** 
	 * 代码库类型，取值为svn/git，可自动解析。
	 **/
	private $repoType;
	
	/** 
	 * 代码库状态，取值为active/inactive/deleted，默认为active。
	 **/
	private $status;
	
	private $apiParas = array();
	
	public function setAppName($appName)
	{
		$this->appName = $appName;
		$this->apiParas["app_name"] = $appName;
	}

	public function getAppName()
	{
		return $this->appName;
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

	public function setRepoPath($repoPath)
	{
		$this->repoPath = $repoPath;
		$this->apiParas["repo_path"] = $repoPath;
	}

	public function getRepoPath()
	{
		return $this->repoPath;
	}

	public function setRepoType($repoType)
	{
		$this->repoType = $repoType;
		$this->apiParas["repo_type"] = $repoType;
	}

	public function getRepoType()
	{
		return $this->repoType;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function getApiMethodName()
	{
		return "taobao.kelude.repo.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->id,"id");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
