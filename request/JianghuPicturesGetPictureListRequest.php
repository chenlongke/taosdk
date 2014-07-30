<?php
/**
 * TOP API: taobao.jianghu.pictures.getPictureList request
 * 
 * @author auto create
 * @since 1.0, 2012-03-19 00:00:00
 */
class JianghuPicturesGetPictureListRequest
{
	/** 
	 * 相册id (须数字)
	 **/
	private $albumId;
	
	/** 
	 * 被查看者的userId(须数字)，如果提供该参数，则查看该用户的相册列表，需要进行隐私策略控制.如果没有的话,查看查看者的相册
	 **/
	private $ownerUid;
	
	/** 
	 * 页码.传入值为1代表第一页,传入值为2代表第二页,依此类推.默认返回的数据是从第一页开始.
	 **/
	private $pageNo;
	
	/** 
	 * 每页数量（默认20）
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setAlbumId($albumId)
	{
		$this->albumId = $albumId;
		$this->apiParas["album_id"] = $albumId;
	}

	public function getAlbumId()
	{
		return $this->albumId;
	}

	public function setOwnerUid($ownerUid)
	{
		$this->ownerUid = $ownerUid;
		$this->apiParas["owner_uid"] = $ownerUid;
	}

	public function getOwnerUid()
	{
		return $this->ownerUid;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function getApiMethodName()
	{
		return "taobao.jianghu.pictures.getPictureList";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->albumId,"albumId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
