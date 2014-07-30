<?php
/**
 * TOP API: taobao.udp.target.add request
 * 
 * @author auto create
 * @since 1.0, 2012-02-29 00:00:00
 */
class UdpTargetAddRequest
{
	/** 
	 * 描述
	 **/
	private $desc;
	
	/** 
	 * 指标名称
	 **/
	private $name;
	
	/** 
	 * 自定义指标中使用的参数值
	 **/
	private $parameters;
	
	/** 
	 * 自定义指标的计算规则，伪SQL
	 **/
	private $rule;
	
	private $apiParas = array();
	
	public function setDesc($desc)
	{
		$this->desc = $desc;
		$this->apiParas["desc"] = $desc;
	}

	public function getDesc()
	{
		return $this->desc;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setParameters($parameters)
	{
		$this->parameters = $parameters;
		$this->apiParas["parameters"] = $parameters;
	}

	public function getParameters()
	{
		return $this->parameters;
	}

	public function setRule($rule)
	{
		$this->rule = $rule;
		$this->apiParas["rule"] = $rule;
	}

	public function getRule()
	{
		return $this->rule;
	}

	public function getApiMethodName()
	{
		return "taobao.udp.target.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->desc,"desc");
		RequestCheckUtil::checkNotNull($this->name,"name");
		RequestCheckUtil::checkMaxListSize($this->parameters,10,"parameters");
		RequestCheckUtil::checkNotNull($this->rule,"rule");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
