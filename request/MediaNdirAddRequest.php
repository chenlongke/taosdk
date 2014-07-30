<?php
/**
 * TOP API: taobao.media.ndir.add request
 * 
 * @author auto create
 * @since 1.0, 2014-01-22 00:00:00
 */
class MediaNdirAddRequest
{
	/** 
	 * 用来表示在图片空间所对应的业务类型
	 **/
	private $bizCode;
	
	/** 
	 * 目录的名称
	 **/
	private $name;
	
	/** 
	 * 目录的所属目录的id，根目录id为0
	 **/
	private $parentId;
	
	private $apiParas = array();
	
	public function setBizCode($bizCode)
	{
		$this->bizCode = $bizCode;
		$this->apiParas["biz_code"] = $bizCode;
	}

	public function getBizCode()
	{
		return $this->bizCode;
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

	public function setParentId($parentId)
	{
		$this->parentId = $parentId;
		$this->apiParas["parent_id"] = $parentId;
	}

	public function getParentId()
	{
		return $this->parentId;
	}

	public function getApiMethodName()
	{
		return "taobao.media.ndir.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizCode,"bizCode");
		RequestCheckUtil::checkNotNull($this->name,"name");
		RequestCheckUtil::checkMaxLength($this->name,50,"name");
		RequestCheckUtil::checkNotNull($this->parentId,"parentId");
		RequestCheckUtil::checkMinValue($this->parentId,0,"parentId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
