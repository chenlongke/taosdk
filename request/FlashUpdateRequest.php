<?php
/**
 * TOP API: taobao.flash.update request
 * 
 * @author auto create
 * @since 1.0, 2013-12-14 00:00:00
 */
class FlashUpdateRequest
{
	/** 
	 * 更新文件描述
	 **/
	private $desc;
	
	/** 
	 * flash文件id
	 **/
	private $flashId;
	
	/** 
	 * flash文件名称
	 **/
	private $name;
	
	private $apiParas = array();
	
	public function setDesc($desc)
	{
		$this->desc = $desc;
		$this->apiParas["desc"] = $desc;
	}

	public function getDesc()
	{
		return $this->desc;
	}

	public function setFlashId($flashId)
	{
		$this->flashId = $flashId;
		$this->apiParas["flash_id"] = $flashId;
	}

	public function getFlashId()
	{
		return $this->flashId;
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
		return "taobao.flash.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->desc,50,"desc");
		RequestCheckUtil::checkNotNull($this->flashId,"flashId");
		RequestCheckUtil::checkMaxValue($this->flashId,9223372036854775807,"flashId");
		RequestCheckUtil::checkMinValue($this->flashId,1,"flashId");
		RequestCheckUtil::checkMaxLength($this->name,50,"name");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
