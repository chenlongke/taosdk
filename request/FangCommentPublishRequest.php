<?php
/**
 * TOP API: taobao.fang.comment.publish request
 * 
 * @author auto create
 * @since 1.0, 2013-08-12 00:00:00
 */
class FangCommentPublishRequest
{
	/** 
	 * 评论的作者
	 **/
	private $author;
	
	/** 
	 * 楼盘ID
	 **/
	private $buildingId;
	
	/** 
	 * 评论的内容
	 **/
	private $commentMessage;
	
	/** 
	 * 评论标题
	 **/
	private $commentSubject;
	
	/** 
	 * 评论创建的时间
	 **/
	private $createTimeStr;
	
	/** 
	 * 外部评论ID,可以是纯数字也可以是字符串
	 **/
	private $outerCommentId;
	
	/** 
	 * 评论来源
	 **/
	private $sourceFrom;
	
	/** 
	 * 评论的版本信息
	 **/
	private $version;
	
	private $apiParas = array();
	
	public function setAuthor($author)
	{
		$this->author = $author;
		$this->apiParas["author"] = $author;
	}

	public function getAuthor()
	{
		return $this->author;
	}

	public function setBuildingId($buildingId)
	{
		$this->buildingId = $buildingId;
		$this->apiParas["building_id"] = $buildingId;
	}

	public function getBuildingId()
	{
		return $this->buildingId;
	}

	public function setCommentMessage($commentMessage)
	{
		$this->commentMessage = $commentMessage;
		$this->apiParas["comment_message"] = $commentMessage;
	}

	public function getCommentMessage()
	{
		return $this->commentMessage;
	}

	public function setCommentSubject($commentSubject)
	{
		$this->commentSubject = $commentSubject;
		$this->apiParas["comment_subject"] = $commentSubject;
	}

	public function getCommentSubject()
	{
		return $this->commentSubject;
	}

	public function setCreateTimeStr($createTimeStr)
	{
		$this->createTimeStr = $createTimeStr;
		$this->apiParas["create_time_str"] = $createTimeStr;
	}

	public function getCreateTimeStr()
	{
		return $this->createTimeStr;
	}

	public function setOuterCommentId($outerCommentId)
	{
		$this->outerCommentId = $outerCommentId;
		$this->apiParas["outer_comment_id"] = $outerCommentId;
	}

	public function getOuterCommentId()
	{
		return $this->outerCommentId;
	}

	public function setSourceFrom($sourceFrom)
	{
		$this->sourceFrom = $sourceFrom;
		$this->apiParas["source_from"] = $sourceFrom;
	}

	public function getSourceFrom()
	{
		return $this->sourceFrom;
	}

	public function setVersion($version)
	{
		$this->version = $version;
		$this->apiParas["version"] = $version;
	}

	public function getVersion()
	{
		return $this->version;
	}

	public function getApiMethodName()
	{
		return "taobao.fang.comment.publish";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buildingId,"buildingId");
		RequestCheckUtil::checkNotNull($this->commentMessage,"commentMessage");
		RequestCheckUtil::checkNotNull($this->commentSubject,"commentSubject");
		RequestCheckUtil::checkNotNull($this->outerCommentId,"outerCommentId");
		RequestCheckUtil::checkNotNull($this->sourceFrom,"sourceFrom");
		RequestCheckUtil::checkNotNull($this->version,"version");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
