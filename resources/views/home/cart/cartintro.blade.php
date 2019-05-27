@extends('common.homes')

<style>
		.cart-empty{
			height: 98px;
		    padding: 80px 0 120px;
		    color: #333;

		}

		.cart-empty .message{
			height: 98px;
		    padding-left: 341px;
		    background: url(/home/no-login-icon.png) 250px 22px no-repeat;
		}

		.cart-empty .message .txt {
		    font-size: 14px;
		}
		.cart-empty .message li {
		    line-height: 38px;
		}

		ol, ul {
		    list-style: outside none none;
		}

		.ftx-05, .ftx05 {
			color: #005ea7;
		}
		
		a {
		    color: #666;
		    text-decoration: none;
		    margin:0px;
		    padding:0px;
		    font-size:14px;
		}

		.cart-empty{
			display:none;
		}
		
</style>

@section('title',$title)

@section('content')
<div id='cart'>
	<div class="table-responsive bottommargin">
		<table class="table cart">
			<thead>
				<tr>
					<th class="cart-product-remove"><a href="javascript:void(0)" class='as'>全选</a></th>
					<th class="cart-product-remove">商品图片</th>
					<th class="cart-product-thumbnail">商品名称</th>
					<th class="cart-product-name">价格</th>
					<th class="cart-product-name">颜色</th>
					<th class="cart-product-name">尺码</th>
					<th class="cart-product-price">数量</th>
					<th class="cart-product-quantity">小计</th>
					<th class="cart-product-subtotal">操作</th>
				</tr>
			</thead>
			<tbody>
				@foreach($rs as $k => $v)
				<tr class="cart_item">
					<td class="cart-product-name">
						<input type="checkbox" class='che' gid='{{$v->id}}'/>
					</td>

					<td class="cart-product-thumbnail">
						<a href="#"><img width="64" height="64" src="{{$v->gimg}}" alt="Pink Printed Dress"></a>
					</td>

					<td class="cart-product-name">
						<a href="#">{{$v->name}}</a>
					</td>

					<td class="cart-product-price">
						<span class="prc">{{$v->price}}</span>
					</td>

					<td class="cart-product-name">
						<span href="#">{{$v->color}}</span>
					</td>

					<td class="cart-product-name">
						<span href="#">{{$v->size}}</span>
					</td>

					<td class="cart-product-quantity">
						<div class="quantity clearfix">
							<input type="button" value="-" class="minus">
							<input type="text" name="quantity" value="1" class="qty" />
							<input type="button" value="+" class="plus">
						</div>
					</td>

					<td class="cart-product-subtotal">
						¥<span class="amount">{{$v->price}}</span>
					</td>

					<td class="cart-product-remove">
						<a href="#" class="remove" title="Remove this item"><i class="icon-trash2"></i></a>
					</td>
				</tr>
				@endforeach
				
				
			</tbody>

		</table>


	</div>

	<div class="row clearfix">

		<div class="col-md-6 col-md-offset-6 clearfix">
			<div class="table-responsive">
				<h4>Cart Totals</h4>

				<table class="table cart">
					<tbody>
						
						<tr class="cart_item">
							<td class="cart-product-name">
								<strong>Shipping</strong>
							</td>

							<td class="cart-product-name">
								<span class="amount">Free Delivery</span>
							</td>
						</tr>
						<tr class="cart_item">
							<td class="cart-product-name">
								<strong>Total</strong>
							</td>

							<td class="cart-product-name">
								<span class="amount color lead">¥<strong id='total'>0.00</strong></span>
							</td>
						</tr>
					</tbody>

				</table>

			</div>
		</div>

		
		<td colspan="9">
			<div class="row clearfix">
				
				<div class="col-md-12 col-xs-8 nopadding">
					
					<a href="shop.html" class="button button-3d notopmargin fright">结算</a>
				</div>
			</div>
		</td>
		
	</div>

	
</div>

<div class="cart-empty">
	    <div class="message">
	        <ul>
	            <li class="txt">
	                购物车空空的哦~，去看看心仪的商品吧~
	            </li>
	            <li class="mt10">
	                <a href="/home/index" class="ftx-05">
	                    去购物&gt;
	                </a>
	            </li>
	            
	        </ul>
	    </div>
	</div>

@stop

@section('js')
<script>
	//加法
	$('.plus').click(function(){

		//获取数量的值
		//第一种方式
		var num = $(this).prev().val().trim();

		num++;

		$(this).prev().val(num);

		//第二种方式
		/*var $num = $(this).parents('tr').find('.qty').val().trim();

		$num++;

		 $(this).parents('tr').find('.qty').val($num);*/

		 //获取单价
		 var pr = $(this).parents('tr').find('.prc').text();

		function accMul(arg1, arg2) {

	        var m = 0, s1 = arg1.toString(), s2 = arg2.toString();

	        try { m += s1.split(".")[1].length } catch (e) { }

	        try { m += s2.split(".")[1].length } catch (e) { }

	        return Number(s1.replace(".", "")) * Number(s2.replace(".", "")) / Math.pow(10, m)

		}

		//改变小计的价格
		$(this).parents('tr').find('.amount').text(accMul(num, pr));

		getTotals();

	})

	//减法
	$('.minus').click(function(){
		//
		var num = $(this).next().val().trim();

		num--;
		if(num <= 1){

			num = 1;
		}

		$(this).next().val(num);

		//获取单价
		var pr = $(this).parents('tr').find('.prc').text();

		function accMul(arg1, arg2) {

	        var m = 0, s1 = arg1.toString(), s2 = arg2.toString();

	        try { m += s1.split(".")[1].length } catch (e) { }

	        try { m += s2.split(".")[1].length } catch (e) { }

	        return Number(s1.replace(".", "")) * Number(s2.replace(".", "")) / Math.pow(10, m)

		}

		 //改变小计的价格
		$(this).parents('tr').find('.amount').text(accMul(num, pr));

		getTotals();

	})

	//点击多选框
	$('.che').click(function(){

		getTotals();
	})

	//封装
	function getTotals()
	{
		var totals = 0;
		$(':checkbox:checked').each(function(){
			
			var tos = parseFloat($(this).parents('tr').find('.amount').text());

			// console.log(typeof tos);

			totals += tos;
			
		})
		//让总计发生改变
		$('#total').text(totals);
	}

	//全选
	$('.as').click(function(){

		//让所有的多选框打钩
		$('.che').attr('checked', true);

		getTotals();
	})

	//删除
	$('.remove').click(function(){

		var tishi = confirm('你确定删除吗??');

		if(!tishi) return;

		//获取当前商品的id
		var gid = $(this).parents('tr').find('.che').attr('gid');

		var rems = $(this);

		// 发送ajax
		$.post('/home/remcart',{'_token':"{{csrf_token()}}",gid:gid},function(data){

			// console.log(data);
			if (data.code == 1) {

				// alert(data.success);

				rems.parents('tr').remove();

				getTotals();

				var gids = $('.che').attr('gid');

				//让购车信息的部分隐藏
				if(gids == undefined){

					// location.reload();

					$('#cart').hide();

					$('.cart-empty').show();
				}

			} else {
				alert(data.error);
			}
		})


	})


	function relaods()
	{
		var gids = $('.che').attr('gid');

		//让购车信息的部分隐藏
		if(gids == undefined){

			// location.reload();

			$('#cart').hide();

			$('.cart-empty').show();
		}
	}
	relaods();


</script>


@stop