<?php

namespace Catetree;

class Cates
{
	public function getCates()
	{
		$data = db('cate')->order('id', 'asc')->select();
		$dd = $this->sort($data);
		return $dd;
	}

	public function sort($data, $pid = 0, $level = 0)
	{
		static $arr = array();
		foreach ($data as $k => $v) {
			if ($v['pid'] == $pid) {
				$v['level'] = $level;
				array_push($arr, $v);
				$this->sort($data, $v['id'], $level + 1);
			}
		}
		return $arr;
	}

	/**
	 * 获取子栏目id	 
	 */
	public function sonids($id)
	{
		$obj=db('cate');
		$data=$obj->select();
		static $arr=array();		
		foreach($data as $k=>$v){
			if($v['pid']==$id){
				$arr[]=$v['id'];
				$this->sonids($v['id']);
			}
		}
		return $arr;
	}
}
