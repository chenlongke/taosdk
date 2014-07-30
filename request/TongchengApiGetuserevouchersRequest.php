<?php
/**
 * TOP API: taobao.tongcheng.api.getuserevouchers request
 * 
 * @author auto create
 * @since 1.0, 2013-05-28 00:00:00
 */
class TongchengApiGetuserevouchersRequest
{
	/** 
	 * 商家发布的代金券Id
即传这个值可以获取某个代金券,某个用户拥有的的总数
不传获取该用户所有商家发布的代金券
	 **/
	private $fid;
	
	/** 
	 * 淘宝用户uid,沙箱测试 让用户传入
上线后通过session由top处理传入
	 **/
	private $taobaoUid;
	
	private $apiParas = array();
	
	public function setFid($fid)
	{
		$this->fid = $fid;
		$this->apiParas["fid"] = $fid;
	}

	public function getFid()
	{
		return $this->fid;
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
		return "taobao.tongcheng.api.getuserevouchers";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->taobaoUid,"taobaoUid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
