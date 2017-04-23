;(function($,window,document,undefined){
	//定义类名
	var pluginName = "mcollaspe";
	//定义默认值
	var defaults = {
		contentWrapper : "",
		activeName : null
	};
				
	//定义插件类
	function Plugin(element,options){
		this.element = element;
		this.options = $.extend({}, defaults, options);
		this.defaults = defaults;
		this.init();
	}
				
	Plugin.prototype.init=function(){
		var $ele = $(this.element);
		var $contentW = $(this.options.contentWrapper);
		var $contentP = $contentW.parent()
		var activeName = this.options.activeName;
		$ele.on("click","h4",function(){
			var $this = $(this)
			c = $this.data("collaspe");
			if( $contentP.find("ul[data-collaspe="+c+"]").data("collaspe") == c ){
				$this.toggleClass("on").siblings("h4").removeClass("on");
				$contentP.find("ul[data-collaspe]").not("ul[data-collaspe="+c+"]").slideUp();
				$contentP.find("ul[data-collaspe="+c+"]").slideToggle();
			}
			
		})

		if(activeName !== null){
			$ele.find('[data-collaspe='+activeName +']').addClass("on");
			$contentP.find('ul[data-collaspe='+activeName +']').show();
		}
	}
				
	$.fn[pluginName] = function(options){
		//遍历所有，链式操作
		return this.each(function(){
			new Plugin(this,options);
		})
	}
				
})(jQuery,window,document);

//个人中心
$(function(){
	$(".center-list").on("click","li",function(){
		var $this = $(this);
		var $li = $this.parent().find("li");
		var i = $li.index(this);
		$this.addClass("active").siblings().removeClass("active");
		$(".center-info").hide(600).eq(i).show(600);
	})
})
