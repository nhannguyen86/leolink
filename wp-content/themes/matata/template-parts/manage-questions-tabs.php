<?php
/**
 * Template Name: Manage question, document, video with multi tabs
 *
 * @package Matata
 */

get_header(); ?>

<style type="text/css">
.nav-tabs{
  background-color: #E0E6F8;
}
.nav-tabs>li.active>a{
  font-weight: bold;
  color: #0000FF;
}
.nav>li>a {
    padding-top: 0px;
    padding-bottom: 0px;
}

/*1 post format*/
.panel.panel-default {
    border: transparent;
}
.panel {
    margin-top: 2px;
    margin-bottom: 10px;
    box-shadow: 2px 2px rgba(0,0,0,.1);
    background-color: #fff;
    border-radius: 0;
}
.panel-default>.panel-heading {
    color: #4c4c4c;
    background-color: #fff;
    border-color: #e5e5e5;
}
.panel-heading {
    border: none;
    padding: 10px 15px;
}
photo[size=i] {
    width: 20px;
    height: 20px;
}
[info] photo {
    margin-right: 5px;
    margin-bottom: -5px;
}
photo {
    display: inline-block;
}
photo>div {
    display: table;
    width: 100%;
    height: 100%;
    table-layout: fixed;
}
photo>div>div {
    display: table-cell;
    width: 100%;
    height: 100%;
    text-align: center;
    vertical-align: middle;
    position: relative;
}
photo img {
    vertical-align: top;
}
body img {
    max-width: 100%;
    height: auto!important;
}
img {
    vertical-align: middle;
    border: 0;
}
photo img:not([src]), photo img[src]~i {
    display: none;
}


photo [ng-transclude], photo img~i {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
photo img~i {
    font-size: 10px!important;
    color: rgba(0,0,0,.4);
    background-color: rgba(0,0,0,.1);
    padding-top: 4px;
}
.small, small {
    font-size: 85%;
}
.btn-group-vertical>.btn-group:after, .btn-group-vertical>.btn-group:before, .btn-toolbar:after, .btn-toolbar:before, .clearfix:after, .clearfix:before, .container-fluid:after, .container-fluid:before, .container:after, .container:before, .dl-horizontal dd:after, .dl-horizontal dd:before, .form-horizontal .form-group:after, .form-horizontal .form-group:before, .modal-footer:after, .modal-footer:before, .modal-header:after, .modal-header:before, .nav:after, .nav:before, .navbar-collapse:after, .navbar-collapse:before, .navbar-header:after, .navbar-header:before, .navbar:after, .navbar:before, .panel-body:after, .panel-body:before, .row:after, .row:before {
    content: " ";
    display: table;
}
.btn-group-vertical>.btn-group:after, .btn-toolbar:after, .clearfix:after, .container-fluid:after, .container:after, .dl-horizontal dd:after, .form-horizontal .form-group:after, .modal-footer:after, .modal-header:after, .nav:after, .navbar-collapse:after, .navbar-header:after, .navbar:after, .panel-body:after, .row:after {
    clear: both;
}
.panel-body {
    padding: 15px;
}
.panel-footer {
    border: none;
}
.panel-footer {
    padding: 10px 15px;
    background-color: #fff;
}
.panel-footer:before {
    border-top: 1px solid #e5e5e5;
    content: "";
    display: block;
    height: 11px;
    margin-top: -11px;
    width: 100%;
}
.btn {
    font-weight: 500;
    text-transform: uppercase;
    font-family: Montserrat,sans-serif;
}
.btn-group-xs>.btn, .btn-xs {
    padding: 1px 5px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 0;
}
.btn-link, .btn-link:active, .btn-link:focus, .btn-link:hover {
    border-color: transparent;
}
.btn-link, .btn-link.active, .btn-link:active, .btn-link[disabled], fieldset[disabled] .btn-link {
    background-color: transparent;
    box-shadow: none;
}
.btn-link {
    color: #7895ce;
}
.btn {
    display: inline-block;
    margin-bottom: 0;
    text-align: center;
    vertical-align: middle;
    touch-action: manipulation;
    cursor: pointer;
    background-image: none;
    border: 1px solid transparent;
    white-space: nowrap;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}


*, :after, :before {
    box-sizing: border-box;
}

div {
    display: block;
}
/*end 1 post format*/
/*override style matata*/
#content {
    background-color: #f4f3ef;
}

/*end override*/
/*override style matata*/
#page, .pageWidth{
	width: 100%;
	max-width: 100%;
}
/*override style custom*/
</style>
<ul id = "myTab" class = "nav nav-tabs">
   <li class = "active">
      <a href = "#home" data-toggle = "tab">
         <?php echo __('Technology', 'matata'); ?>
      </a>
   </li>
   
   <li>
   	   <a href = "#ios" data-toggle = "tab">
   			<?php echo __('Devices', 'matata'); ?>
   	   </a>
   </li>
	
   <li>
	   <a href = "#jmeter" tabindex = "-1" data-toggle = "tab">
   			<?php echo __('Chemistry', 'matata'); ?>
	   </a>
   </li>
   <li>
	   <a href = "#ejb" tabindex = "-1" data-toggle = "tab">
   			<?php echo __('Necklace', 'matata'); ?>
	   </a>
   </li>
	
</ul>

<div id = "myTabContent" class = "tab-content">

   <div class = "tab-pane fade in active" id = "home">
   
         <div class="panel panel-default" ng-class="(startEid==answer.eid) ? 'panel-primary' : 'panel-default'"><div class="panel-heading"><!-- ngIf: isGranted(['EDIT','DELETE'], answer) --> <div class="info-expanded" info="answer"> <!-- ngIf: ::object.classifying --> <!-- ngIf: uiSref --><a ng-if="uiSref" ui-sref="app.user.single.home({ slug: object.created_by.slug, eid: object.created_by.eid })" ui-sref-opts="{instance: instance}" href="/member-8CG/christina-goodrich-YQ3IAvY3OKoT5k05DcZkpg/home"><photo src="::photo" size="i" default="icon icon-user-o"><div><div><img src="https://thewaternetwork.com/storage/PSoZdsR8YtexrY7_u-Do0Q/i/0_0Bi5ZQWy26n21J6DUFfwZFWpmzIuBZ6DUkgHYbB-iTE71MN_JbCWp32peoe"><i class="icon icon-user-o"></i><div ng-transclude=""></div></div></div></photo> Christina Goodrich </a><!-- end ngIf: uiSref --> <small tfx-datetime="::object.created_at" format="ago"><span ng-attr-title="{{ datetime | date:FORMAT }}" ng-init="FORMAT='MMM d, y @ HH:mm'" title="Sep 23, 2016 @ 02:51">
         <!-- ngIf: !format --> <!-- ngIf: format=='ago' -->
         <span ng-if="format=='ago'" am-time-ago="datetime">5 days ago</span>
         <!-- end ngIf: format=='ago' --> <!-- ngIf: format=='calendar' -->
         <!-- ngIf: format&&format!='ago'&&format!='calendar' --> 
         </span></small></div></div> 
         <div class="panel-body">
         <i class="icon-answer-o"></i>
         <i class="fa fa-question fa-pull-left fa-border" aria-hidden="true" style="font-size: 2em;"></i>
         <div ng-bind-html="answer.description | mentionify: answer.mentions" class="clearfix">Greetings, I know these systems are very expensive, but great at reducing infiltration issues. I think City of&nbsp;Boca Raton in Florida has a vacuum system. Probably more expensive to retrofit&nbsp;an&nbsp;old system&nbsp;but easier if it is a brand&nbsp;new development for obvious reasons...Probably more expensive to retrofit&nbsp;an&nbsp;old system&nbsp;but easier if it is a brand&nbsp;new development for obvious reasons...Probably more expensive to retrofit&nbsp;an&nbsp;old system&nbsp;but easier if it is a brand&nbsp;new development for obvious reasons...Probably more expensive to retrofit&nbsp;an&nbsp;old system&nbsp;but easier if it is a brand&nbsp;new development for obvious reasons...</div> 
          <!-- ngIf: isGranted('EDIT',answer) --></div> <div class="panel-footer"><span ng-click="answer.comments_show=!answer.comments_show" ng-init="answer.comments_show=startEid===answer.eid" class="btn btn-xs btn-link">
          <i class="icon icon-comments-o"></i> <span class="hidden-xs">Comments</span> (<span ng-bind="answer.counters.comments">1</span>) </span> <span like="answer" type="vote" class="btn btn-xs btn-link"><span><span>
          <i class="icon icon-like-o"></i> <span class="hidden-xs">Vote </span> </span> <span>
          <i class="icon icon-like-o"></i> <span class="hidden-xs">Voted </span> </span> <span>
          <i class="icon icon-close-circle"></i> <span class="hidden-xs">Unvote </span> </span> </span> (<span ng-bind="object.counters.likes">0</span>)</span> <span tfx-following="answer" parent="question" class="btn btn-xs btn-link"><span><span>
          <i class="icon icon-follow-o"></i> <span class="hidden-xs">Follow </span> </span> <span><i class="icon icon-check"></i> <span class="hidden-xs">Following </span> </span> <span><i class="icon icon-close-circle"></i> <span class="hidden-xs">Unfollow </span> </span> </span></span></div></div>
         
         
          
          <div class="panel panel-default" ng-class="(startEid==answer.eid) ? 'panel-primary' : 'panel-default'"><div class="panel-heading"><!-- ngIf: isGranted(['EDIT','DELETE'], answer) --> <div class="info-expanded" info="answer"> <!-- ngIf: ::object.classifying --> <!-- ngIf: uiSref --><a ng-if="uiSref" ui-sref="app.user.single.home({ slug: object.created_by.slug, eid: object.created_by.eid })" ui-sref-opts="{instance: instance}" href="/member-8CG/christina-goodrich-YQ3IAvY3OKoT5k05DcZkpg/home"><photo src="::photo" size="i" default="icon icon-user-o"><div><div><img src="https://thewaternetwork.com/storage/PSoZdsR8YtexrY7_u-Do0Q/i/0_0Bi5ZQWy26n21J6DUFfwZFWpmzIuBZ6DUkgHYbB-iTE71MN_JbCWp32peoe"><i class="icon icon-user-o"></i><div ng-transclude=""></div></div></div></photo> Christina Goodrich </a><!-- end ngIf: uiSref --> <small tfx-datetime="::object.created_at" format="ago"><span ng-attr-title="{{ datetime | date:FORMAT }}" ng-init="FORMAT='MMM d, y @ HH:mm'" title="Sep 23, 2016 @ 02:51">
         <!-- ngIf: !format --> <!-- ngIf: format=='ago' -->
         <span ng-if="format=='ago'" am-time-ago="datetime">5 days ago</span>
         <!-- end ngIf: format=='ago' --> <!-- ngIf: format=='calendar' -->
         <!-- ngIf: format&&format!='ago'&&format!='calendar' --> 
         </span></small></div></div> 
         <div class="panel-body">
         <i class="icon-answer-o"></i>
         <i class="fa fa-question fa-pull-left fa-border" aria-hidden="true" style="font-size: 2em;"></i>
         <div ng-bind-html="answer.description | mentionify: answer.mentions" class="clearfix">Greetings, I know these systems are very expensive, but great at reducing infiltration issues. I think City of&nbsp;Boca Raton in Florida has a vacuum system. Probably more expensive to retrofit&nbsp;an&nbsp;old system&nbsp;but easier if it is a brand&nbsp;new development for obvious reasons...Probably more expensive to retrofit&nbsp;an&nbsp;old system&nbsp;but easier if it is a brand&nbsp;new development for obvious reasons...Probably more expensive to retrofit&nbsp;an&nbsp;old system&nbsp;but easier if it is a brand&nbsp;new development for obvious reasons...Probably more expensive to retrofit&nbsp;an&nbsp;old system&nbsp;but easier if it is a brand&nbsp;new development for obvious reasons...</div> 
          <!-- ngIf: isGranted('EDIT',answer) --></div> <div class="panel-footer"><span ng-click="answer.comments_show=!answer.comments_show" ng-init="answer.comments_show=startEid===answer.eid" class="btn btn-xs btn-link">
          <i class="icon icon-comments-o"></i> <span class="hidden-xs">Comments</span> (<span ng-bind="answer.counters.comments">1</span>) </span> <span like="answer" type="vote" class="btn btn-xs btn-link"><span><span>
          <i class="icon icon-like-o"></i> <span class="hidden-xs">Vote </span> </span> <span>
          <i class="icon icon-like-o"></i> <span class="hidden-xs">Voted </span> </span> <span>
          <i class="icon icon-close-circle"></i> <span class="hidden-xs">Unvote </span> </span> </span> (<span ng-bind="object.counters.likes">0</span>)</span> <span tfx-following="answer" parent="question" class="btn btn-xs btn-link"><span><span>
          <i class="icon icon-follow-o"></i> <span class="hidden-xs">Follow </span> </span> <span><i class="icon icon-check"></i> <span class="hidden-xs">Following </span> </span> <span><i class="icon icon-close-circle"></i> <span class="hidden-xs">Unfollow </span> </span> </span></span></div></div>
         
          
         <select name="page-dropdown"
 onchange='document.location.href=this.options[this.selectedIndex].value;'> 
 <option value="">
<?php echo esc_attr( __( 'Select page' ) ); ?></option> 
 <?php 
  $pages = get_pages(); 
  foreach ( $pages as $page ) {
  	$option = '<option value="' . get_page_link( $page->ID ) . '">';
	$option .= $page->post_title . ' ' . $page->post_name . ' ' . $page->ID;
	$option .= '</option>';
	echo $option;
  }
 ?>
</select>

   </div>
   
   <div class = "tab-pane fade" id = "ios">
      <p>iOS is a mobile operating system developed and distributed 
         by Apple Inc. Originally released in 2007 for the iPhone, iPod Touch,
         and Apple TV. iOS is derived from OS X, with which it shares the 
         Darwin foundation. iOS is Apple's mobile version of the OS X 
         operating system used on Apple computers.</p>
   </div>
   
   <div class = "tab-pane fade" id = "jmeter">
      <p>jMeter is an Open Source testing software. It is 100% pure Java 
         application for load and performance testing.</p>
   </div>
   
   <div class = "tab-pane fade" id = "ejb">
      <p>Enterprise Java Beans (EJB) is a development architecture for 
         building highly scalable and robust enterprise level applications to be 
         deployed on J2EE compliant Application Server such as JBOSS, Web Logic etc.</p>
   </div>
   
</div>

<?php
get_footer();