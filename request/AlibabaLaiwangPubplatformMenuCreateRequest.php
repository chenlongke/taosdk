<?php
/**
 * TOP API: alibaba.laiwang.pubplatform.menu.create request
 * 
 * @author auto create
 * @since 1.0, 2014-01-10 00:00:00
 */
class AlibabaLaiwangPubplatformMenuCreateRequest
{
	/** 
	 * 123123
	 **/
	private $menudef;
	
	private $apiParas = array();
	
	public function setMenudef($menudef)
	{
		$this->menudef = $menudef;
		$this->apiParas["menudef"] = $menudef;
	}

	public function getMenudef()
	{
		return $this->menudef;
	}

	public function getApiMethodName()
	{
		return "alibaba.laiwang.pubplatform.menu.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->menudef,"menudef");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
