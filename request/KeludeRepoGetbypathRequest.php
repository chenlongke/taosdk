<?php
/**
 * TOP API: taobao.kelude.repo.getbypath request
 * 
 * @author auto create
 * @since 1.0, 2014-04-15 00:00:00
 */
class KeludeRepoGetbypathRequest
{
	/** 
	 * 代码库地址
	 **/
	private $repoPath;
	
	private $apiParas = array();
	
	public function setRepoPath($repoPath)
	{
		$this->repoPath = $repoPath;
		$this->apiParas["repo_path"] = $repoPath;
	}

	public function getRepoPath()
	{
		return $this->repoPath;
	}

	public function getApiMethodName()
	{
		return "taobao.kelude.repo.getbypath";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->repoPath,"repoPath");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
