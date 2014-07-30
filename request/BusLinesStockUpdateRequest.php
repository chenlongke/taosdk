<?php
/**
 * TOP API: taobao.bus.lines.stock.update request
 * 
 * @author auto create
 * @since 1.0, 2014-04-03 00:00:00
 */
class BusLinesStockUpdateRequest
{
	/** 
	 * 库存
	 **/
	private $params;
	
	private $apiParas = array();
	
	public function setParams($params)
	{
		$this->params = $params;
		$this->apiParas["params"] = $params;
	}

	public function getParams()
	{
		return $this->params;
	}

	public function getApiMethodName()
	{
		return "taobao.bus.lines.stock.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->params,"params");
		RequestCheckUtil::checkMaxListSize($this->params,100,"params");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
