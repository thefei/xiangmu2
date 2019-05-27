@extends('common/homes')
@section('title','网站首页')
@section('content')
<div id="slideBox" class="slideBox">
      <div class="hd">
        <ul class="smallUl"></ul>
      </div>
      <div class="bd">
        <ul>
        @foreach($rs as $k=>$v)
          <li><a href="#" target="_blank"><div style="background:url({{$v->profile}}) no-repeat; background-position:center; width:100%; height:450px;"></div></a></li>
         @endforeach
        </ul>
      </div>
      <!-- 下面是前/后按钮-->
      <a class="prev" href="javascript:void(0)"></a>
      <a class="next" href="javascript:void(0)"></a>

    </div>
    <script type="text/javascript">
    jQuery(".slideBox").slide({titCell:".hd ul",mainCell:".bd ul",autoPlay:true,autoPage:true});
    </script>
 </div>
  

<div id="mian">
 <div class="clearfix marginbottom">
 <!--产品分类样式-->
  <div class="Menu_style" id="allSortOuterbox">
   <div class="title_name"><em></em>所有商品分类</div>
   <div class="content hd_allsort_out_box_new">
    <ul class="Menu_list">
      <li class="name">
        <div class="Menu_name"><a href="product_list.html" >茶品类</a> <span>&lt;</span></div>
        <div class="link_name">
          <p>
          <a href="Product_Detailed.html">茅台</a> | 
          <a href="#">五粮液</a> | 
          <a href="#">郎酒</a> | 
          <a href="#">剑南春</a>
          <a href="Product_Detailed.html">茅台</a> | 
          <a href="#">五粮液</a> | 
          <a href="#">郎酒</a> | 
          <a href="#">剑南春</a>
          </p>
        </div>
        <div class="menv_Detail">
         <div class="cat_pannel clearfix">
           <div class="hd_sort_list">
            <dl class="clearfix" data-tpc="1">
             <dt><a href="#">面膜<i>></i></a></dt>
             <dd><a href="#">撕拉面膜</a><a href="#">面膜贴</a><a href="#">免洗面膜</a><a href="#">水洗面膜</a></dd> 
            </dl>
             <dl class="clearfix" data-tpc="2">
             <dt><a href="#">洁面<i>></i></a></dt>
             <dd><a href="#">洁面摩丝</a><a href="#">洁面乳 </a><a href="#">洁面啫哩/胶</a><a href="#">面部去角质/磨砂</a><a href="#">洁面膏/霜</a><a href="#">洁肤皂</a></dd> 
            </dl>
             <dl class="clearfix" data-tpc="3">
             <dt><a href="#">化妆水<i>></i></a></dt>
             <dd><a href="#"> 喷雾</a><a href="#"> 精华水</a><a href="#"> 柔肤水</a><a href="#">爽肤水</a><a href="#">收敛水/紧肤水</a></dd> 
            </dl>
             <dl class="clearfix" data-tpc="4">
             <dt><a href="#">眼部护理<i>></i></a></dt>
             <dd><a href="#"> 眼膜</a><a href="#"> 眼部凝胶</a><a href="#">眼部精华</a><a href="#">眼霜</a></dd> 
            </dl>
             <dl class="clearfix" data-tpc="4">
             <dt><a href="#">眼部护理<i>></i></a></dt>
             <dd><a href="#"> 眼膜</a><a href="#"> 眼部凝胶</a><a href="#">眼部精华</a><a href="#">眼霜</a></dd> 
            </dl>
             <dl class="clearfix" data-tpc="4">
             <dt><a href="#">防晒<i>></i></a></dt>
             <dd><a href="#"> 眼膜</a><a href="#"> 眼部凝胶</a><a href="#">眼部精华</a><a href="#">眼霜</a></dd> 
            </dl>
             <dl class="clearfix" data-tpc="4">
             <dt><a href="#">唇部护理<i>></i></a></dt>
             <dd><a href="#"> 眼膜</a><a href="#"> 眼部凝胶</a><a href="#">眼部精华</a><a href="#">眼霜</a></dd> 
            </dl> <dl class="clearfix" data-tpc="4">
             <dt><a href="#">乳液/面霜<i>></i></a></dt>
             <dd><a href="#"> 乳液</a><a href="#"> 面霜</a><a href="#">按摩霜</a><a href="#">面部啫喱</a><a href="#">凝露/凝胶</a></dd> 
            </dl>
           </div><div class="Brands">
          </div>
          </div>
          <!--品牌-->       
        </div>       
        </li>
        <li class="name">
        <div class="Menu_name"><a href="#" >豆制品类</a><span>&lt;</span></div>
        <div class="link_name">
         <a href="Product_Detailed.html"> 面霜</a> | <a href="#">眼霜</a> | <a href="#"> 面膜</a> | <a href="#">护肤套装</a>

        </div>
        <div class="menv_Detail">
         <div class="cat_pannel clearfix">         
          </div>
        </div>      
        </li>
        <li class="name">
        <div class="Menu_name"><a href="#" >菌菇类</a><span>&lt;</span></div>
        <div class="link_name">
         <a href="Product_Detailed.html"> 面霜</a><a href="#">眼霜</a><a href="#"> 面膜</a><a href="#">护肤套装</a>

        </div>
        <div class="menv_Detail">
         <div class="cat_pannel clearfix">         
          </div>
        </div>      
        </li>
               <li class="name">
        <div class="Menu_name"><a href="#" >粮油五谷类</a><span>&lt;</span></div>
        <div class="link_name">
         <a href="Product_Detailed.html"> 面霜</a><a href="#">眼霜</a><a href="#"> 面膜</a><a href="#">护肤套装</a>

        </div>
        <div class="menv_Detail">
         <div class="cat_pannel clearfix">         
          </div>
        </div>      
        </li>
               <li class="name">
        <div class="Menu_name"><a href="#" >禽蛋类</a><span>&lt;</span></div>
        <div class="link_name">
         <a href="Product_Detailed.html"> 面霜</a><a href="#">眼霜</a><a href="#"> 面膜</a><a href="#">护肤套装</a>

        </div>
        <div class="menv_Detail">
         <div class="cat_pannel clearfix">         
          </div>
        </div>      
        </li>
               <li class="name">
        <div class="Menu_name"><a href="#" >蔬菜类类</a><span>&lt;</span></div>
        <div class="link_name">
         <a href="Product_Detailed.html"> 面霜</a><a href="#">眼霜</a><a href="#"> 面膜</a><a href="#">护肤套装</a>

        </div>
        <div class="menv_Detail">
         <div class="cat_pannel clearfix">         
          </div>
        </div>      
        </li>
    </ul>
   </div>
  </div>
  <script>$("#allSortOuterbox").slide({ titCell:".Menu_list li",mainCell:".menv_Detail",    });</script>
  <!--产品栏切换-->
  <div class="product_list left">
        <div class="slideGroup">
            <div class="parHd">
                <ul><li>新品上市</li><li>超值特惠</li><li>本期团购</li><li>产品精选</li><li>抢先一步</li></ul>
            </div>
            <div class="parBd">
                    <div class="slideBoxs">
                        <a class="sPrev" href="javascript:void(0)"></a>
                        <ul>
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="/home/products/p_11.jpg" /></a></div>
                                <div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
                            </li>
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="/home/products/p_12.jpg" /></a></div>
                                <div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
                            </li>
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="/home/products/p_13.jpg" /></a></div>
                                <div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
                            </li>
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="/home/products/p_15.jpg" /></a></div>
                                <div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
                            </li>
                        </ul>
                        <a class="sNext" href="javascript:void(0)"></a>
                    </div><!-- slideBox End -->

                    <div class="slideBoxs">
                        <a class="sPrev" href="javascript:void(0)"></a>
                        <ul>
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="/home/products/p_15.jpg" /></a></div>
                                <div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
                            </li>
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="/home/products/p_15.jpg" /></a></div>
                                <div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
                            </li>
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="/home/products/p_34.jpg" /></a></div>
                                <div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
                            </li>
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="/home/products/p_58.jpg" /></a></div>
                                <div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
                            </li>
                        </ul>
                        <a class="sNext" href="javascript:void(0)"></a>
                    </div><!-- slideBox End -->

                    <div class="slideBoxs">
                        <a class="sPrev" href="javascript:void(0)"></a>
                        <ul>
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="/home/products/p_57.jpg" /></a></div>
                                <div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
                            </li>
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="/home/products/p_56.jpg" /></a></div>
                                <div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
                            </li>
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="/home/products/p_54.jpg" /></a></div>
                                <div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
                            </li>
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="/home/products/p_55.jpg" /></a></div>
                                <div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
                            </li>
                        </ul>
                        <a class="sNext" href="javascript:void(0)"></a>
                    </div><!-- slideBox End -->
                        <div class="slideBoxs">
                        <a class="sPrev" href="javascript:void(0)"></a>
                        <ul>
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="/home/products/p_50.jpg" /></a></div>
                                <div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
                            </li>
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="/home/products/p_51.jpg" /></a></div>
                                <div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
                            </li>
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="/home/products/p_52.jpg" /></a></div>
                                <div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
                            </li>
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="/home/products/p_53.jpg" /></a></div>
                                <div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
                            </li>
                        </ul>
                        <a class="sNext" href="javascript:void(0)"></a>
                    </div><!-- slideBox End -->
                        <div class="slideBoxs">
                        <a class="sPrev" href="javascript:void(0)"></a>
                        <ul>
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="/home/products/p_15.jpg" /></a></div>
                                <div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
                            </li>
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="/home/products/p_17.jpg" /></a></div>
                                <div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
                            </li>
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="/home/products/p_16.jpg" /></a></div>
                                <div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
                            </li>
                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="/home/products/p_19.jpg" /></a></div>
                                <div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
                            </li>
                        </ul>
                        <a class="sNext" href="javascript:void(0)"></a>
                    </div><!-- slideBox End -->

            </div><!-- parBd End -->
        </div>
        <script type="text/javascript">
            /* 内层图片无缝滚动 */
            jQuery(".slideGroup .slideBoxs").slide({ mainCell:"ul",vis:4,prevCell:".sPrev",nextCell:".sNext",effect:"leftMarquee",interTime:50,autoPlay:true,trigger:"click"});
            /* 外层tab切换 */
            jQuery(".slideGroup").slide({titCell:".parHd li",mainCell:".parBd"});
        </script>
        <!--广告样式-->
        <div class="Ads_style"><a href="#"><img src="/home/images/AD_03.png"  width="318"/></a><a href="#"><img src="/home/images/AD_04.png" width="318"/></a><a href="#"><img src="/home/images/AD_06.png" width="318"/></a></div>
  </div>
 </div>
 <!--板块栏目样式-->
 <div class="clearfix Plate_style">
  <div class="Plate_column Plate_column_left">
    <div class="Plate_name">
    <h2>产品名称</h2>
    <div class="Sort_link"><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a></div>
    <a href="#" class="Plate_link"> <img src="/home/images/bk_img_14.png" /></a>
   
    </div>
    <div class="Plate_product">
    <ul id="lists">
     <li class="product_display">
     <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="/home/products/p_44.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
    <div class="Detailed">
       <div class="content">
          <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
          </div>
       </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="/home/products/p_43.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
      <div class="Detailed">
       <div class="content">
          <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
          </div>
       </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="/home/products/p_41.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
       <div class="Detailed">
       <div class="content">
          <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
          </div>
       </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="/home/products/p_42.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
     <div class="Detailed">
       <div class="content">
          <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
          </div>
       </div>
     </li>
    </ul>
    </div>
  </div>
  <!--板块名称-->
    <div class="Plate_column Plate_column_right">
    <div class="Plate_name">
    <h2>产品名称</h2>
    <div class="Sort_link"><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a></div>
    <a href="#" class="Plate_link"> <img src="/home/images/bk_img_19.png" /></a>
   
    </div>
    <div class="Plate_product">
    <ul id="lists">
     <li class="product_display">
     <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="/home/products/p_15.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
    <div class="Detailed">
       <div class="content">
          <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
          </div>
       </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="/home/products/p_13.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
      <div class="Detailed">
       <div class="content">
          <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
          </div>
       </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="/home/products/p_12.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
       <div class="Detailed">
       <div class="content">
          <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
          </div>
       </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="/home/products/p_11.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
     <div class="Detailed">
       <div class="content">
          <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
          </div>
       </div>
     </li>
    </ul>
    </div>
  </div>
   <div class="Plate_column Plate_column_left">
    <div class="Plate_name">
    <h2>产品名称</h2>
    <div class="Sort_link"><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a></div>
    <a href="#" class="Plate_link"> <img src="/home/images/bk_img_22.png" /></a>
   
    </div>
    <div class="Plate_product">
    <ul id="lists">
     <li class="product_display">
     <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="/home/products/p_21.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
    <div class="Detailed">
       <div class="content">
          <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
          </div>
       </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="/home/products/p_25.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
      <div class="Detailed">
       <div class="content">
          <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
          </div>
       </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="/home/products/p_22.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
       <div class="Detailed">
       <div class="content">
          <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
          </div>
       </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="/home/products/p_24.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
     <div class="Detailed">
       <div class="content">
          <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
          </div>
       </div>
     </li>
    </ul>
    </div>
  </div>
  <!--板块名称-->
    <div class="Plate_column Plate_column_right">
    <div class="Plate_name">
    <h2>产品名称</h2>
    <div class="Sort_link"><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a></div>
    <a href="#" class="Plate_link"> <img src="/home/images/bk_img_14.png" /></a>
   
    </div>
    <div class="Plate_product">
    <ul id="lists">
     <li class="product_display">
     <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="/home/products/p_31.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
    <div class="Detailed">
       <div class="content">
          <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
          </div>
       </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="/home/products/p_32.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
      <div class="Detailed">
       <div class="content">
          <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
          </div>
       </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="/home/products/p_33.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
       <div class="Detailed">
       <div class="content">
          <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
          </div>
       </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="/home/products/p_37.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
     <div class="Detailed">
       <div class="content">
          <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
          </div>
       </div>
     </li>
    </ul>
    </div>
  </div>
 </div>
 <!--友情链接-->
 <div class="link_style clearfix">
 <div class="title">友情链接</div>
 <div class="link_name">
  <a href="#"><img src="/home/products/logo/34.jpg"  width="100"/></a>
  <a href="#"><img src="/home/products/logo/34.jpg"  width="100"/></a>
  <a href="#"><img src="/home/products/logo/34.jpg"  width="100"/></a>
  <a href="#"><img src="/home/products/logo/34.jpg"  width="100"/></a>
  <a href="#"><img src="/home/products/logo/34.jpg"  width="100"/></a>
  <a href="#"><img src="/home/products/logo/34.jpg"  width="100"/></a>
  <a href="#"><img src="/home/products/logo/34.jpg"  width="100"/></a>
  <a href="#"><img src="/home/products/logo/34.jpg"  width="100"/></a>
  <a href="#"><img src="/home/products/logo/34.jpg"  width="100"/></a>
  <a href="#"><img src="/home/products/logo/34.jpg"  width="100"/></a>
  <a href="#"><img src="/home/products/logo/34.jpg"  width="100"/></a>
  <a href="#"><img src="/home/products/logo/34.jpg"  width="100"/></a>
  <a href="#"><img src="/home/products/logo/34.jpg"  width="100"/></a>
 </div>
 </div>
</div>
@stop