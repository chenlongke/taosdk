<?php
/**
 * TOP API: taobao.cloudstore.dir.add request
 * 
 * @author auto create
 * @since 1.0, 2012-07-12 00:00:00
 */
class CloudstoreDirAddRequest
{
	/** 
	 * 分类名称，长度1~20个字符，不能包含特殊字符\\ / : * ? \" < > | ; 每个ISV最多1000个分类
	 **/
	private $dirName;
	
	private $apiParas = array();
	
	public function setDirName($dirName)
	{
		$this->dirName = $dirName;
		$this->apiParas["dir_name"] = $dirName;
	}

	public function getDirName()
	{
		return $this->dirName;
	}

	public function getApiMethodName()
	{
		return "taobao.cloudstore.dir.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->dirName,"dirName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
