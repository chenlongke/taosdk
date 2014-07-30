<?php
/**
 * TOP API: taobao.tongcheng.api.evoucherdetail request
 * 
 * @author auto create
 * @since 1.0, 2013-05-28 00:00:00
 */
class TongchengApiEvoucherdetailRequest
{
	/** 
	 * 用户已买到代金券id
	 **/
	private $id;
	
	/** 
	 * 淘宝的用户uid
(沙箱环境测试让用户传入,正式发布时是通过系统获取)
	 **/
	private $taobaoUid;
	
	private $apiParas = array();
	
	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setTaobaoUid($taobaoUid)
	{
		$this->taobaoUid = $taobaoUid;
		$this->apiParas["taobao_uid"] = $taobaoUid;
	}

	public function getTaobaoUid()
	{
		return $this->taobaoUid;
	}

	public function getApiMethodName()
	{
		return "taobao.tongcheng.api.evoucherdetail";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->id,"id");
		RequestCheckUtil::checkNotNull($this->taobaoUid,"taobaoUid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
