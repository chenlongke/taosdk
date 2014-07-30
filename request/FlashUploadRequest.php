<?php
/**
 * TOP API: taobao.flash.upload request
 * 
 * @author auto create
 * @since 1.0, 2013-12-23 00:00:00
 */
class FlashUploadRequest
{
	/** 
	 * flash文件大小，小于等于10M
	 **/
	private $data;
	
	/** 
	 * flash描述
	 **/
	private $desc;
	
	/** 
	 * flash名称
	 **/
	private $name;
	
	/** 
	 * flash文件路径，长度不能超过50，在路径返回时会对路径加上一个数据标记：/12/common/flash.swf
	 **/
	private $path;
	
	private $apiParas = array();
	
	public function setData($data)
	{
		$this->data = $data;
		$this->apiParas["data"] = $data;
	}

	public function getData()
	{
		return $this->data;
	}

	public function setDesc($desc)
	{
		$this->desc = $desc;
		$this->apiParas["desc"] = $desc;
	}

	public function getDesc()
	{
		return $this->desc;
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

	public function setPath($path)
	{
		$this->path = $path;
		$this->apiParas["path"] = $path;
	}

	public function getPath()
	{
		return $this->path;
	}

	public function getApiMethodName()
	{
		return "taobao.flash.upload";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->data,"data");
		RequestCheckUtil::checkNotNull($this->desc,"desc");
		RequestCheckUtil::checkMaxLength($this->desc,50,"desc");
		RequestCheckUtil::checkNotNull($this->name,"name");
		RequestCheckUtil::checkMaxLength($this->name,50,"name");
		RequestCheckUtil::checkNotNull($this->path,"path");
		RequestCheckUtil::checkMaxLength($this->path,50,"path");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
