<?php 

	function getCateName($pid)
	{
		//$pid 0 1 3 5 7 12 13..........
		if($pid == '0'){

			return '顶级分类';
		} else {

			//查询出父级的信息  
			//4
			$rs = DB::table('category')->where('id',$pid)->first();

			return $rs->catename;

		}
	}

