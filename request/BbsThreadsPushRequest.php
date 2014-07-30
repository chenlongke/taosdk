<?php
/**
 * TOP API: taobao.bbs.threads.push request
 * 
 * @author auto create
 * @since 1.0, 2012-11-23 00:00:00
 */
class BbsThreadsPushRequest
{
	/** 
	 * 主帖或回帖标准HTML内容
	 **/
	private $content;
	
	/** 
	 * 用户精华贴总数
	 **/
	private $digestThreadCount;
	
	/** 
	 * 主帖或回帖是来自淘宝
	 **/
	private $fromTb;
	
	/** 
	 * 主帖或回帖的创建时间
	 **/
	private $gmtCreateTime;
	
	/** 
	 * 用户头像
	 **/
	private $headPic;
	
	/** 
	 * 是否是回帖
	 **/
	private $isReply;
	
	/** 
	 * 最后修改时间
	 **/
	private $lastModifiedTime;
	
	/** 
	 * 论坛用户积分
	 **/
	private $point;
	
	/** 
	 * 淘宝板块ID
	 **/
	private $tbBoardId;
	
	/** 
	 * 淘宝回帖ID
	 **/
	private $tbReplyId;
	
	/** 
	 * 淘宝主帖ID
	 **/
	private $tbThreadId;
	
	/** 
	 * 淘宝论坛用户ID
	 **/
	private $tbUserId;
	
	/** 
	 * 主帖摘要属性，0表示普通，1表示精华，2表示下沉
	 **/
	private $thDigest;
	
	/** 
	 * 主帖的最后回帖作者昵称
	 **/
	private $thLastReplyAuthorNick;
	
	/** 
	 * 主帖的最后回帖的淘宝作者ID
	 **/
	private $thLastReplyTbAuthorId;
	
	/** 
	 * 帖子的最后回帖时间
	 **/
	private $thLastReplyTime;
	
	/** 
	 * 主帖的最后第三方回帖作者ID
	 **/
	private $thLastReplyTpAuthorId;
	
	/** 
	 * 主帖的标题
	 **/
	private $thSubject;
	
	/** 
	 * 主帖类型，0表示普通贴，1表示置顶贴
	 **/
	private $thType;
	
	/** 
	 * 论坛用户积分
	 **/
	private $threadCount;
	
	/** 
	 * 原帖URL链接
	 **/
	private $threadUrl;
	
	/** 
	 * 第三方论坛版块或者标签ID
	 **/
	private $tpBoardId;
	
	/** 
	 * 第三方主帖的回帖ID
	 **/
	private $tpReplyId;
	
	/** 
	 * 第三方主帖ID
	 **/
	private $tpThreadId;
	
	/** 
	 * 第三方论坛用户ID
	 **/
	private $tpUserId;
	
	/** 
	 * 论坛用户昵称
	 **/
	private $userNick;
	
	/** 
	 * 用户头衔名称
	 **/
	private $userTitleName;
	
	/** 
	 * 1表示淘宝用户，2 表示当前合作伙伴用户，3 其它合作伙伴用户
	 **/
	private $userType;
	
	private $apiParas = array();
	
	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function setDigestThreadCount($digestThreadCount)
	{
		$this->digestThreadCount = $digestThreadCount;
		$this->apiParas["digest_thread_count"] = $digestThreadCount;
	}

	public function getDigestThreadCount()
	{
		return $this->digestThreadCount;
	}

	public function setFromTb($fromTb)
	{
		$this->fromTb = $fromTb;
		$this->apiParas["from_tb"] = $fromTb;
	}

	public function getFromTb()
	{
		return $this->fromTb;
	}

	public function setGmtCreateTime($gmtCreateTime)
	{
		$this->gmtCreateTime = $gmtCreateTime;
		$this->apiParas["gmt_create_time"] = $gmtCreateTime;
	}

	public function getGmtCreateTime()
	{
		return $this->gmtCreateTime;
	}

	public function setHeadPic($headPic)
	{
		$this->headPic = $headPic;
		$this->apiParas["head_pic"] = $headPic;
	}

	public function getHeadPic()
	{
		return $this->headPic;
	}

	public function setIsReply($isReply)
	{
		$this->isReply = $isReply;
		$this->apiParas["is_reply"] = $isReply;
	}

	public function getIsReply()
	{
		return $this->isReply;
	}

	public function setLastModifiedTime($lastModifiedTime)
	{
		$this->lastModifiedTime = $lastModifiedTime;
		$this->apiParas["last_modified_time"] = $lastModifiedTime;
	}

	public function getLastModifiedTime()
	{
		return $this->lastModifiedTime;
	}

	public function setPoint($point)
	{
		$this->point = $point;
		$this->apiParas["point"] = $point;
	}

	public function getPoint()
	{
		return $this->point;
	}

	public function setTbBoardId($tbBoardId)
	{
		$this->tbBoardId = $tbBoardId;
		$this->apiParas["tb_board_id"] = $tbBoardId;
	}

	public function getTbBoardId()
	{
		return $this->tbBoardId;
	}

	public function setTbReplyId($tbReplyId)
	{
		$this->tbReplyId = $tbReplyId;
		$this->apiParas["tb_reply_id"] = $tbReplyId;
	}

	public function getTbReplyId()
	{
		return $this->tbReplyId;
	}

	public function setTbThreadId($tbThreadId)
	{
		$this->tbThreadId = $tbThreadId;
		$this->apiParas["tb_thread_id"] = $tbThreadId;
	}

	public function getTbThreadId()
	{
		return $this->tbThreadId;
	}

	public function setTbUserId($tbUserId)
	{
		$this->tbUserId = $tbUserId;
		$this->apiParas["tb_user_id"] = $tbUserId;
	}

	public function getTbUserId()
	{
		return $this->tbUserId;
	}

	public function setThDigest($thDigest)
	{
		$this->thDigest = $thDigest;
		$this->apiParas["th_digest"] = $thDigest;
	}

	public function getThDigest()
	{
		return $this->thDigest;
	}

	public function setThLastReplyAuthorNick($thLastReplyAuthorNick)
	{
		$this->thLastReplyAuthorNick = $thLastReplyAuthorNick;
		$this->apiParas["th_last_reply_author_nick"] = $thLastReplyAuthorNick;
	}

	public function getThLastReplyAuthorNick()
	{
		return $this->thLastReplyAuthorNick;
	}

	public function setThLastReplyTbAuthorId($thLastReplyTbAuthorId)
	{
		$this->thLastReplyTbAuthorId = $thLastReplyTbAuthorId;
		$this->apiParas["th_last_reply_tb_author_id"] = $thLastReplyTbAuthorId;
	}

	public function getThLastReplyTbAuthorId()
	{
		return $this->thLastReplyTbAuthorId;
	}

	public function setThLastReplyTime($thLastReplyTime)
	{
		$this->thLastReplyTime = $thLastReplyTime;
		$this->apiParas["th_last_reply_time"] = $thLastReplyTime;
	}

	public function getThLastReplyTime()
	{
		return $this->thLastReplyTime;
	}

	public function setThLastReplyTpAuthorId($thLastReplyTpAuthorId)
	{
		$this->thLastReplyTpAuthorId = $thLastReplyTpAuthorId;
		$this->apiParas["th_last_reply_tp_author_id"] = $thLastReplyTpAuthorId;
	}

	public function getThLastReplyTpAuthorId()
	{
		return $this->thLastReplyTpAuthorId;
	}

	public function setThSubject($thSubject)
	{
		$this->thSubject = $thSubject;
		$this->apiParas["th_subject"] = $thSubject;
	}

	public function getThSubject()
	{
		return $this->thSubject;
	}

	public function setThType($thType)
	{
		$this->thType = $thType;
		$this->apiParas["th_type"] = $thType;
	}

	public function getThType()
	{
		return $this->thType;
	}

	public function setThreadCount($threadCount)
	{
		$this->threadCount = $threadCount;
		$this->apiParas["thread_count"] = $threadCount;
	}

	public function getThreadCount()
	{
		return $this->threadCount;
	}

	public function setThreadUrl($threadUrl)
	{
		$this->threadUrl = $threadUrl;
		$this->apiParas["thread_url"] = $threadUrl;
	}

	public function getThreadUrl()
	{
		return $this->threadUrl;
	}

	public function setTpBoardId($tpBoardId)
	{
		$this->tpBoardId = $tpBoardId;
		$this->apiParas["tp_board_id"] = $tpBoardId;
	}

	public function getTpBoardId()
	{
		return $this->tpBoardId;
	}

	public function setTpReplyId($tpReplyId)
	{
		$this->tpReplyId = $tpReplyId;
		$this->apiParas["tp_reply_id"] = $tpReplyId;
	}

	public function getTpReplyId()
	{
		return $this->tpReplyId;
	}

	public function setTpThreadId($tpThreadId)
	{
		$this->tpThreadId = $tpThreadId;
		$this->apiParas["tp_thread_id"] = $tpThreadId;
	}

	public function getTpThreadId()
	{
		return $this->tpThreadId;
	}

	public function setTpUserId($tpUserId)
	{
		$this->tpUserId = $tpUserId;
		$this->apiParas["tp_user_id"] = $tpUserId;
	}

	public function getTpUserId()
	{
		return $this->tpUserId;
	}

	public function setUserNick($userNick)
	{
		$this->userNick = $userNick;
		$this->apiParas["user_nick"] = $userNick;
	}

	public function getUserNick()
	{
		return $this->userNick;
	}

	public function setUserTitleName($userTitleName)
	{
		$this->userTitleName = $userTitleName;
		$this->apiParas["user_title_name"] = $userTitleName;
	}

	public function getUserTitleName()
	{
		return $this->userTitleName;
	}

	public function setUserType($userType)
	{
		$this->userType = $userType;
		$this->apiParas["user_type"] = $userType;
	}

	public function getUserType()
	{
		return $this->userType;
	}

	public function getApiMethodName()
	{
		return "taobao.bbs.threads.push";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->content,"content");
		RequestCheckUtil::checkNotNull($this->fromTb,"fromTb");
		RequestCheckUtil::checkNotNull($this->gmtCreateTime,"gmtCreateTime");
		RequestCheckUtil::checkNotNull($this->isReply,"isReply");
		RequestCheckUtil::checkNotNull($this->lastModifiedTime,"lastModifiedTime");
		RequestCheckUtil::checkNotNull($this->tpBoardId,"tpBoardId");
		RequestCheckUtil::checkNotNull($this->userType,"userType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
