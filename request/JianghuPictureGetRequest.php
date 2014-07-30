<?php
/**
 * TOP API: taobao.jianghu.picture.get request
 * 
 * @author auto create
 * @since 1.0, 2012-11-26 00:00:00
 */
class JianghuPictureGetRequest
{
	/** 
	 * 被查看者的userId(须数字)，如果没有的话,返回查看者的图片.可以通过得到好友的接口taobao.jianghu.friends.getFriendList得到好友的userId
	 **/
	private $ownerUid;
	
	/** 
	 * 照片id(须数字).获取方式：
1.通过taobao.jianghu.pictures.getPictureList可以得到该id;
2.通过进入isv的页面以参数的形式传递给isv
	 **/
	private $pictureId;
	
	private $apiParas = array();
	
	public function setOwnerUid($ownerUid)
	{
		$this->ownerUid = $ownerUid;
		$this->apiParas["owner_uid"] = $ownerUid;
	}

	public function getOwnerUid()
	{
		return $this->ownerUid;
	}

	public function setPictureId($pictureId)
	{
		$this->pictureId = $pictureId;
		$this->apiParas["picture_id"] = $pictureId;
	}

	public function getPictureId()
	{
		return $this->pictureId;
	}

	public function getApiMethodName()
	{
		return "taobao.jianghu.picture.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->pictureId,"pictureId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
