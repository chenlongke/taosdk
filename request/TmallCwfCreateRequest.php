<?php
/**
 * TOP API: tmall.cwf.create request
 * 
 * @author auto create
 * @since 1.0, 2013-07-05 00:00:00
 */
class TmallCwfCreateRequest
{
	/** 
	 * 业务数据id
	 **/
	private $bizId;
	
	/** 
	 * 业务类型,能表明你自己的业务含义的唯一字符串
	 **/
	private $bizType;
	
	/** 
	 * 自已定义的流程的code
	 **/
	private $code;
	
	/** 
	 * 参数上下文，流程文件里定义的参数，必需要输入,在客户端和服务端都是map类型
	 **/
	private $context;
	
	/** 
	 * 流程域名
	 **/
	private $domain;
	
	/** 
	 * 备注信息
	 **/
	private $memo;
	
	/** 
	 * 只有当创建子流程的时候才会用到，外部isv基本用不到，默认值-1即可
	 **/
	private $parentTaskId;
	
	/** 
	 * 工作流启动的时间
	 **/
	private $scheduleStartTime;
	
	/** 
	 * 流程创建人
	 **/
	private $user;
	
	private $apiParas = array();
	
	public function setBizId($bizId)
	{
		$this->bizId = $bizId;
		$this->apiParas["biz_id"] = $bizId;
	}

	public function getBizId()
	{
		return $this->bizId;
	}

	public function setBizType($bizType)
	{
		$this->bizType = $bizType;
		$this->apiParas["biz_type"] = $bizType;
	}

	public function getBizType()
	{
		return $this->bizType;
	}

	public function setCode($code)
	{
		$this->code = $code;
		$this->apiParas["code"] = $code;
	}

	public function getCode()
	{
		return $this->code;
	}

	public function setContext($context)
	{
		$this->context = $context;
		$this->apiParas["context"] = $context;
	}

	public function getContext()
	{
		return $this->context;
	}

	public function setDomain($domain)
	{
		$this->domain = $domain;
		$this->apiParas["domain"] = $domain;
	}

	public function getDomain()
	{
		return $this->domain;
	}

	public function setMemo($memo)
	{
		$this->memo = $memo;
		$this->apiParas["memo"] = $memo;
	}

	public function getMemo()
	{
		return $this->memo;
	}

	public function setParentTaskId($parentTaskId)
	{
		$this->parentTaskId = $parentTaskId;
		$this->apiParas["parent_task_id"] = $parentTaskId;
	}

	public function getParentTaskId()
	{
		return $this->parentTaskId;
	}

	public function setScheduleStartTime($scheduleStartTime)
	{
		$this->scheduleStartTime = $scheduleStartTime;
		$this->apiParas["schedule_start_time"] = $scheduleStartTime;
	}

	public function getScheduleStartTime()
	{
		return $this->scheduleStartTime;
	}

	public function setUser($user)
	{
		$this->user = $user;
		$this->apiParas["user"] = $user;
	}

	public function getUser()
	{
		return $this->user;
	}

	public function getApiMethodName()
	{
		return "tmall.cwf.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizId,"bizId");
		RequestCheckUtil::checkMaxLength($this->bizId,256,"bizId");
		RequestCheckUtil::checkNotNull($this->bizType,"bizType");
		RequestCheckUtil::checkMaxLength($this->bizType,256,"bizType");
		RequestCheckUtil::checkNotNull($this->code,"code");
		RequestCheckUtil::checkMaxLength($this->code,256,"code");
		RequestCheckUtil::checkNotNull($this->context,"context");
		RequestCheckUtil::checkMaxLength($this->context,4000,"context");
		RequestCheckUtil::checkNotNull($this->domain,"domain");
		RequestCheckUtil::checkMaxLength($this->domain,256,"domain");
		RequestCheckUtil::checkNotNull($this->memo,"memo");
		RequestCheckUtil::checkMaxLength($this->memo,256,"memo");
		RequestCheckUtil::checkNotNull($this->parentTaskId,"parentTaskId");
		RequestCheckUtil::checkNotNull($this->scheduleStartTime,"scheduleStartTime");
		RequestCheckUtil::checkNotNull($this->user,"user");
		RequestCheckUtil::checkMaxLength($this->user,256,"user");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
