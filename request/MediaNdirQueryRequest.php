<?php
/**
 * TOP API: taobao.media.ndir.query request
 * 
 * @author auto create
 * @since 1.0, 2014-01-23 00:00:00
 */
class MediaNdirQueryRequest
{
	/** 
	 * 多媒体应用接入biz_code
	 **/
	private $bizCode;
	
	/** 
	 * json格式传递查询条件，支持：
1,按照id查询{"id":123}
2,目录名称查询{"name","afdsa"}
3,父目录id查询{"parentDirId",123}
4,支持排序{"order":0,"sort":0},order对应值有0:id排序,1:创建时间,2:修改时间,3:名称;不传是默认按照id排序;
5:使用分页功能{"page":1,"pageSize":10}
	 **/
	private $jsonParam;
	
	private $apiParas = array();
	
	public function setBizCode($bizCode)
	{
		$this->bizCode = $bizCode;
		$this->apiParas["biz_code"] = $bizCode;
	}

	public function getBizCode()
	{
		return $this->bizCode;
	}

	public function setJsonParam($jsonParam)
	{
		$this->jsonParam = $jsonParam;
		$this->apiParas["json_param"] = $jsonParam;
	}

	public function getJsonParam()
	{
		return $this->jsonParam;
	}

	public function getApiMethodName()
	{
		return "taobao.media.ndir.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizCode,"bizCode");
		RequestCheckUtil::checkNotNull($this->jsonParam,"jsonParam");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
