<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"D:\phpStudy\WWW\TpShop\public/../application/admin\view\article\list.html";i:1588234283;s:62:"D:\phpStudy\WWW\TpShop\application\admin\view\common\head.html";i:1588206545;s:62:"D:\phpStudy\WWW\TpShop\application\admin\view\common\left.html";i:1588559509;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>童老师ThinkPHP交流群：484519446</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="/tpshop/public/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="/tpshop/public/static/admin/style/font-awesome.css" rel="stylesheet">
    <link href="/tpshop/public/static/admin/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="/tpshop/public/static/admin/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="/tpshop/public/static/admin/style/demo.css" rel="stylesheet">
    <link href="/tpshop/public/static/admin/style/typicons.css" rel="stylesheet">
    <link href="/tpshop/public/static/admin/style/animate.css" rel="stylesheet">

</head>

<body>
    <!-- 头部 -->
    <div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <img src="/tpshop/public/static/admin/images/logo.png" alt="">
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="/tpshop/public/static/admin/images/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span>admin</span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/logout.html">
                                        退出登录
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/changePwd.html">
                                        修改密码
                                    </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>


    <!-- /头部 -->

    <div class="main-container container-fluid">
        <div class="page-container">
            <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input class="searchinput" type="text">
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <!--Dashboard-->


        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>

                <span class="menu-text">
                    商品管理 </span>

                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            商品列表 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            添加商品 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('Brand/index'); ?>">
                        <span class="menu-text">
                            商品品牌 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            商品分类 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            商品类型 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            商品回收站 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>

            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>

                <span class="menu-text">
                    促销管理 </span>

                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            团购活动 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            积分商城 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            优惠券 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>

                <span class="menu-text">
                    订单管理 </span>

                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            订单列表 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            订单查询 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>

                <span class="menu-text">
                    会员管理 </span>

                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            会员列表 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            会员等级 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            会员留言 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="https://chuanke.baidu.com/s2260700.html" target="_blank">
                <i class="menu-icon fa fa-film"></i>

                <span class="menu-text">
                    权限管理</span>

                <i class="menu-expand"></i>
            </a>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>

                <span class="menu-text">
                    系统设置 </span>

                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            商店设置 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            会员注册项设置 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            支付方式设置 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>

                <span class="menu-text">
                    数据库管理 </span>

                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            数据备份 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>

                <span class="menu-text">
                    短信管理 </span>

                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            发送短信 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            短信签名 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>

                <span class="menu-text">
                    文章模块 </span>

                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('cate/index'); ?>">
                        <span class="menu-text">
                            文章分类 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('Article/index'); ?>">
                        <span class="menu-text">
                            文章管理 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('Article/add'); ?>">
                        <span class="menu-text">
                            文章添加 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('Article/picmg'); ?>">
                        <span class="menu-text">
                            图片管理 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>

                <span class="menu-text">
                    友情链接 </span>

                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('cate/index'); ?>">
                        <span class="menu-text">
                            链接管理 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('Article/index'); ?>">
                        <span class="menu-text">
                            文章管理 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- /Sidebar Menu -->
</div>

            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">系统</a>
                        </li>
                        <li class="active">分类管理</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">

                    <button type="button" tooltip="添加用户" class="btn btn-sm btn-azure btn-addon"
                        onClick="javascript:window.location.href = '<?php echo url('add'); ?>'"> <i class="fa fa-plus"></i> Add
                    </button>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="widget">
                                <div class="widget-body">
                                    <div class="flip-scroll">
                                        <form action="" method='post'>
                                        <table class="table table-bordered table-hover">
                                            <thead class="">
                                                <tr>
                                                    <th class="text-center" width='3%'>ID</th>
                                                    <th class="text-center">标题</th>
                                                    <th class="text-center" width='5%'>作者</th>
                                                    <th class="text-center" width='5%'>缩略图</th>
                                                    <th class="text-center" width='5%'>外链</th>
                                                    <th class="text-center" width='15%'>是否置顶</th>
                                                    <th class="text-center" width='20%'>所属栏目</th>
                                                    <th class="text-center" width='10%'>添加时间</th>
                                                    <th class="text-center" width='20%'>操作</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($arts as $v): ?>
                                                <tr>
                                                    <td class='text-center'><?php echo $v['id']; ?></td>
                                                    <td class=''><?php echo substr($v['title'],0,10); ?></td>
                                                    <td class='text-center'><?php echo $v['author']; ?></td>
                                                    <td class='text-center'>
                                                        <?php if($v['thumb']!=""): ?>
                                                            <img src="/tpshop/public/static/uploads/<?php echo $v['thumb']; ?>" alt="" height='25'>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td class='text-center'><?php echo $v['link_url']; ?></td>
                                                    <td class='text-center' width='5%'>
                                                        <?php switch($v['show_top']): case "0": ?>否<?php break; case "1": ?>是<?php break; endswitch; ?>
                                                    </td>
                                                    <td class='text-center'><?php echo $v['cate_name']; ?></td>
                                                    <td class='text-center'><?php echo date('Y-m-d',$v['addtime']); ?></td>
                                                    <td class='text-center'>
                                                        <a class="btn btn-primary btn-sm shiny"
                                                            href="<?php echo url('edit',array('id'=>$v['id'])); ?>">
                                                            <i class="fa fa-edit"></i> 编辑
                                                        </a>
                                                        <a class="btn btn-danger btn-sm shiny"
                                                            onclick="warning('确实要删除吗', 'del.html?id=<?php echo $v['id']; ?>')" href="#">
                                                            <i class="fa fa-trash-o"></i> 删除
                                                        </a>                                                   
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>   
                                                <tr>
                                                    <td colspan='9' class='text-right'><?php echo $arts->render(); ?></td>
                                                </tr>                                             
                                            </tbody>
                                        </table>
                                        </form>
                                    </div>
                                    <div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
        </div>
    </div>

    <!--Basic Scripts-->
    <script src="/tpshop/public/static/admin/style/jquery_002.js"></script>
    <script src="/tpshop/public/static/admin/style/bootstrap.js"></script>
    <script src="/tpshop/public/static/admin/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="/tpshop/public/static/admin/style/beyond.js"></script>



</body>

</html>