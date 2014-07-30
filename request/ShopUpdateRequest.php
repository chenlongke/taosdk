<?php
/**
 * TOP API: taobao.shop.update request
 * 
 * @author auto create
 * @since 1.0, 2014-02-28 00:00:00
 */
class ShopUpdateRequest
{
	/** 
	 * 店铺公告。不超过1024个字符
	 **/
	private $bulletin;
	
	/** 
	 * 店铺描述。10～2000个字符以内
	 **/
	private $desc;
	
	private $apiParas = array();
	
	public function setBulletin($bulletin)
	{
		$this->bulletin = $bulletin;
		$this->apiParas["bulletin"] = $bulletin;
	}

	public function getBulletin()
	{
		return $this->bulletin;
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

	public function getApiMethodName()
	{
		return "taobao.shop.update";
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
