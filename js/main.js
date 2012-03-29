$(document).ready(function() {

	$('ul.accordion').accordion({
		active: ".selected",
		autoHeight: false,
		header: ".opener",
		collapsible: true,
		event: "click"
	});

 
});

// star rating init
function initRating() {
	var rates = document.getElementsByTagName('ul');
	for (var i = 0; i < rates.length; i ++) {
		if (rates[i].className.indexOf('star-rating') != -1) {
			new StarRating({
				element:rates[i],
				onselect:function(num) {
					// rating setted event
				}
			})
		}
	}
}

// simple star raring module
function StarRating() {
	this.options = {
		activeClass:'active',
		settedClass:'setted',
		element:null,
		items:null,
		onselect:null
	}
	this.init.apply(this,arguments);
}
StarRating.prototype = {
	init: function(opt){
		this.setOptions(opt);
		if(this.element) {
			this.getElements();
			this.addEvents();
		}
	},
	setOptions: function(opt) {
		for(var p in opt) {
			if(opt.hasOwnProperty(p)) {
				this.options[p] = opt[p];
			}
		}
		if(this.options.element) {
			this.element = this.options.element;
		}
	},
	getElements: function() {
		// get switch objects
		if(this.options.items == null) {
			this.items = this.element.children;
		} else {
			if(typeof this.options.items === 'string') {
				this.items = this.element.getElementsByTagName(this.options.items);
			} else if(typeof this.options.items === 'object') {
				this.items = this.options.items;
			}
		}

		// find default active index
		for(var i = 0; i < this.items.length; i++) {
			if(this.hasClass(this.items[i],this.options.activeClass)) {
				this.activeIndex = i;
			}
			if(this.hasClass(this.items[i],this.options.settedClass)) {
				this.settedIndex = i;
			}
		}
	},
	addEvents: function() {
		for(var i = 0; i < this.items.length; i++) {
			this.items[i].onmouseover = this.bind(this.overHandler,this, i);
			this.items[i].onmouseout = this.bind(this.outHandler,this, i);
			this.items[i].onclick = this.bind(this.clickHandler,this, i);
		}
	},
	overHandler: function(ind) {
		this.hovering = true;
		this.hoverIndex = ind;
		this.refreshClasses();
	},
	outHandler: function(ind) {
		this.hovering = false;
		this.refreshClasses();
	},
	clickHandler: function(ind) {
		this.hovering = false;
		this.settedIndex = ind;
		if(typeof this.options.onselect === 'function') {
			this.options.onselect(ind);
		}
		this.refreshClasses();
		return false;
	},
	refreshClasses: function() {
		for(var i = 0; i < this.items.length; i++) {
			this.removeClass(this.items[i],this.options.activeClass);
			this.removeClass(this.items[i],this.options.settedClass);
		}
		if(this.hovering) {
			this.addClass(this.items[this.hoverIndex],this.options.activeClass);
		} else {
			if(typeof this.settedIndex === 'number') {
				this.addClass(this.items[this.settedIndex],this.options.settedClass);
			} else {
				if(typeof this.activeIndex === 'number') {
					this.addClass(this.items[this.activeIndex],this.options.activeClass);
				}
			}
		}
	},
	hasClass: function(el,cls) {
		return el && el.className ? el.className.match(new RegExp('(\\s|^)'+cls+'(\\s|$)')) : false;
	},
	addClass: function(el,cls) {
		if (el && !this.hasClass(el,cls)) el.className += " "+cls;
	},
	removeClass: function(el,cls) {
		if (el && this.hasClass(el,cls)) {el.className=el.className.replace(new RegExp('(\\s|^)'+cls+'(\\s|$)'),' ');}
	},
	bind: function(f, scope, args){
		return function() {return f.apply(scope, [args] || arguments)}
	}
}

if (window.addEventListener) window.addEventListener("load", initRating, false);
else if (window.attachEvent) window.attachEvent("onload", initRating);