<?php
/**
 * TOP API: taobao.kelude.bugimg.delete request
 * 
 * @author auto create
 * @since 1.0, 2012-06-29 00:00:00
 */
class KeludeBugimgDeleteRequest
{
	/** 
	 * 缺陷图片ID
	 **/
	private $bugimgId;
	
	private $apiParas = array();
	
	public function setBugimgId($bugimgId)
	{
		$this->bugimgId = $bugimgId;
		$this->apiParas["bugimg_id"] = $bugimgId;
	}

	public function getBugimgId()
	{
		return $this->bugimgId;
	}

	public function getApiMethodName()
	{
		return "taobao.kelude.bugimg.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bugimgId,"bugimgId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
