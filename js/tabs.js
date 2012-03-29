// init tabs when page ready
function initTabs() {
	if(typeof ContentTabs !== 'undefined') {
		ContentTabs.init();
	}
}

// content tabs module
ContentTabs = {
	options: {
		classOnParent: false,
		hiddenClass: 'tab-hidden',
		visibleClass: 'tab-active',
		activeClass: 'active',
		tabsets: 'ul.tabset',
		tablinks: 'a.tab',
		event: 'click'
	},
	init: function(){
		this.createStyleSheet();
		this.getTabsets();
		return this;
	},
	createStyleSheet: function() {
		this.tabStyleSheet = document.createElement('style');
		this.tabStyleSheet.setAttribute('type', 'text/css');
		this.tabStyleRule = '.'+this.options.hiddenClass;
		this.tabStyleRule += '{position:absolute !important;left:-9999px !important;top:-9999px !important;display:block !important}';
		document.getElementsByTagName('head')[0].appendChild(this.tabStyleSheet);
		if (this.tabStyleSheet.styleSheet) {
			this.tabStyleSheet.styleSheet.cssText = this.tabStyleRule;
		} else {
			this.tabStyleSheet.appendChild(document.createTextNode(this.tabStyleRule));
		}
	},
	getTabsets: function() {
		this.tabsets = this.queryElements(this.options.tabsets);
		for(var i = 0; i < this.tabsets.length; i++) {
			this.initTabset(this.tabsets[i]);
		}
	},
	initTabset: function(tabset) {
		var tabLinks = this.queryElements(this.options.tablinks, tabset), instance = this;
		for(var i = 0; i < tabLinks.length; i++) {
			tabLinks[i]['on'+this.options.event] = function(){
				instance.switchTab(this, tabLinks);
				return false;
			}
			if(this.hasClass(this.options.classOnParent ? tabLinks[i].parentNode : tabLinks[i], this.options.activeClass)) {
				this.switchTab(tabLinks[i], tabLinks);
			}
		}
	},
	switchTab: function(link, set) {
		for(var i = 0; i < set.length; i++) {
			var curLink = set[i];
			var curTab = document.getElementById(curLink.href.substr(curLink.href.indexOf('#')+1));
			if(curLink === link) {
				this.addClass(this.options.classOnParent ? curLink.parentNode : curLink, this.options.activeClass);
				this.addClass(curTab,this.options.visibleClass);
				this.removeClass(curTab,this.options.hiddenClass);
			} else {
				this.removeClass(this.options.classOnParent ? curLink.parentNode : curLink, this.options.activeClass);
				this.removeClass(curTab,this.options.visibleClass);
				this.addClass(curTab,this.options.hiddenClass);
			}
		}
	},
	queryElements: function(selector, holder) {
		var box = holder || document;
		if(box.querySelectorAll) {
			return box.querySelectorAll(selector);
		} else {
			var res = [], selectorData = selector.split('.');
			var tagName = selectorData[0];
			var set = box.getElementsByTagName(tagName);
			if(selectorData.length > 1) {
				for(var i = 0; i < set.length; i++) {
					if(this.hasClass(set[i], selectorData[1])) res.push(set[i]);
				}
				return res;
			} else {
				return set;
			}
		}
	},
	hasClass: function (obj,cname) {
		return (obj.className ? obj.className.match(new RegExp('(\\s|^)'+cname+'(\\s|$)')) : false);
	},
	addClass: function (obj,cname) {
		if (!this.hasClass(obj,cname)) obj.className += " "+cname;
	},
	removeClass: function (obj,cname) {
		if (this.hasClass(obj,cname)) obj.className=obj.className.replace(new RegExp('(\\s|^)'+cname+'(\\s|$)'),' ');
	}
};

if (window.addEventListener) window.addEventListener("load", initTabs, false);
else if (window.attachEvent) window.attachEvent("onload", initTabs);