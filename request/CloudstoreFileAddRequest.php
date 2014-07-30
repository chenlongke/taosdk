<?php
/**
 * TOP API: taobao.cloudstore.file.add request
 * 
 * @author auto create
 * @since 1.0, 2012-07-12 00:00:00
 */
class CloudstoreFileAddRequest
{
	/** 
	 * 文件属于的那个目录的分类编号
	 **/
	private $dirId;
	
	/** 
	 * 文件上传的内容
	 **/
	private $img;
	
	/** 
	 * 上传文件的名称
	 **/
	private $name;
	
	private $apiParas = array();
	
	public function setDirId($dirId)
	{
		$this->dirId = $dirId;
		$this->apiParas["dir_id"] = $dirId;
	}

	public function getDirId()
	{
		return $this->dirId;
	}

	public function setImg($img)
	{
		$this->img = $img;
		$this->apiParas["img"] = $img;
	}

	public function getImg()
	{
		return $this->img;
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

	public function getApiMethodName()
	{
		return "taobao.cloudstore.file.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMinValue($this->dirId,0,"dirId");
		RequestCheckUtil::checkNotNull($this->img,"img");
		RequestCheckUtil::checkNotNull($this->name,"name");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
