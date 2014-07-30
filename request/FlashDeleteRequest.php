<?php
/**
 * TOP API: taobao.flash.delete request
 * 
 * @author auto create
 * @since 1.0, 2013-12-14 00:00:00
 */
class FlashDeleteRequest
{
	/** 
	 * 批量删除文件列表
	 **/
	private $flashIds;
	
	private $apiParas = array();
	
	public function setFlashIds($flashIds)
	{
		$this->flashIds = $flashIds;
		$this->apiParas["flash_ids"] = $flashIds;
	}

	public function getFlashIds()
	{
		return $this->flashIds;
	}

	public function getApiMethodName()
	{
		return "taobao.flash.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->flashIds,"flashIds");
		RequestCheckUtil::checkMaxListSize($this->flashIds,50,"flashIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
