<?php
/**
 * TOP API: taobao.elink.itemimg.delete request
 * 
 * @author auto create
 * @since 1.0, 2012-03-19 00:00:00
 */
class ElinkItemimgDeleteRequest
{
	/** 
	 * 商品图片id
	 **/
	private $itemimgId;
	
	private $apiParas = array();
	
	public function setItemimgId($itemimgId)
	{
		$this->itemimgId = $itemimgId;
		$this->apiParas["itemimg_id"] = $itemimgId;
	}

	public function getItemimgId()
	{
		return $this->itemimgId;
	}

	public function getApiMethodName()
	{
		return "taobao.elink.itemimg.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemimgId,"itemimgId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
