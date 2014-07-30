<?php
/**
 * TOP API: taobao.kelude.repo.create request
 * 
 * @author auto create
 * @since 1.0, 2014-04-15 00:00:00
 */
class KeludeRepoCreateRequest
{
	/** 
	 * 应用名
	 **/
	private $appName;
	
	/** 
	 * 代码库完整地址
	 **/
	private $repoPath;
	
	/** 
	 * 代码库类型，取值为svn/git，可自动解析。
	 **/
	private $repoType;
	
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

	public function getApiMethodName()
	{
		return "taobao.kelude.repo.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appName,"appName");
		RequestCheckUtil::checkNotNull($this->repoPath,"repoPath");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
