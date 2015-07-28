<style type="text/css">
/*	html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}
body {
	font: 14px "Helvetica Neue", Helvetica, Arial, sans-serif;
	background: #003348;
}*/
#news_ticker {
	width: 100%;
	height: 24px;
	overflow: hidden;
	position: relative;
} 
#news_ticker > span {
	float: left;
	padding: 6px;
	position: relative;
	border-radius: 4px;
	font-size: 12px;
}

#news_ticker > ul {
	float: left;
	padding-left: 20px;
	-webkit-animation: ticker 10s cubic-bezier(1, 0, .5, 0) infinite;
	-moz-animation: ticker 10s cubic-bezier(1, 0, .5, 0) infinite;
	-ms-animation: ticker 10s cubic-bezier(1, 0, .5, 0) infinite;
	animation: ticker 10s cubic-bezier(1, 0, .5, 0) infinite;
}
#news_ticker > ul:hover {
	-webkit-animation-play-state: paused;
	-moz-animation-play-state: paused;
	-ms-animation-play-state: paused;
	animation-play-state: paused;
}
#news_ticker > ul > li {
	line-height: 24px;
	list-style:none;
    background-image:none;
    background-repeat:none;
    background-position:0; 
}
#news_ticker a {
	/*color: #fff;*/
	text-decoration: none;
	font-size: 14px;
}

@-webkit-keyframes ticker {
	0%   {margin-top: 0;}
	25%  {margin-top: -26px;}
	50%  {margin-top: -52px;}
	75%  {margin-top: -78px;}
	100% {margin-top: 0;}
}
@-moz-keyframes ticker {
	0%   {margin-top: 0;}
	25%  {margin-top: -26px;}
	50%  {margin-top: -52px;}
	75%  {margin-top: -78px;}
	100% {margin-top: 0;}
}
@-ms-keyframes ticker {
	0%   {margin-top: 0;}
	25%  {margin-top: -26px;}
	50%  {margin-top: -52px;}
	75%  {margin-top: -78px;}
	100% {margin-top: 0;}
}
@keyframes ticker {
	0%   {margin-top: 0;}
	25%  {margin-top: -26px;}
	50%  {margin-top: -52px;}
	75%  {margin-top: -78px;}
	100% {margin-top: 0;}
}
</style>
<?php 

$posts = wp_get_recent_posts( ['numberposts' => 5], OBJECT );

?>

<div id="news_ticker">
	<span>Latest News</span>
	<ul>
		<?php foreach ($posts as $key => $value): ?>
			<li><a href="<?= $value->guid; ?>"><?= $value->post_title; ?></a></li>
		<?php endforeach ?>
	</ul>
</div>