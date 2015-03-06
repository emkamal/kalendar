(function($){

 	$.fn.extend({ 
 		
		//pass the options variable to the function
 		kalendar: function(options) {
		
			//Set the default values, use comma to separate the settings, example:
			var defaults = {
				numOfLoadedDays: 180,
				numOfInitialRows: 1,
				boxPosition: "bottomLeft", // bottomLeft, bottomMid, bottomRight, topLeft, topMid, topRight, leftTop, leftMid, leftBottom, rightTop, rightMid, rightBottom
				dateFormat: "dd-mm-yyyy", // d, dd, m, mm, MONTH, MON, yy, yyyy
				showDateHover: true,
				disabledDaysOfWeek: [6,7],
				disabledDates: ["9-3-2015", "30-3-2015"],
				animationStyle: "fade", // zoom, fade, none
				showCloseButton: true,
				showScrollBar: true,
				swipeScroll: true,
				showScrollHandler: true,
				cellBackgroundColor: "",
				cellTextColor: "",
				hoverBackgroundColor: "",
				hoverTextColor: "",
				selectedBackgroundColor: "",
				selectedTextColor: "",
				disabledBackgroundColor: "",
				disabledTextColor: "",
				holidayBackgroundColor: "",
				holidayTextColor: "",
				monthLongLabel: ["January", "February", "March", "April", "May", "Juny", "July", "August", "September", "October", "November", "December"],
				monthShortLabel: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
				dayLongLabel: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
				dayShortLabel: ["Mo", "Tu", "We", "Th", "Fr", "Sa", "Su"],
			}
				
			var options =  $.extend(defaults, options);

    		return this.each(function(index) {
				var o = options;
				
				$(this).wrap('<div class="kalendarWrapper" id="kalendarWrapper'+index+'">').after(buildCalendar($(this), index, o));
				
				$("body").on("click", ".kalendarInput", function(){
					$(".kalendarBox").hide();
					var kalendarBox = $(this).closest(".kalendarWrapper").find(".kalendarBox").eq(0);
					
					switch(o.animationStyle){
						case "zoom": kalendarBox.show("fast"); break;
						case "fade": kalendarBox.fadeIn("fast"); break;
						default: kalendarBox.show(); break;
					}
					
					if(kalendarBox.find(".selectedDate").length){
						if(kalendarBox.find(".selectedDate").eq(0).position().top != 80){
							kalendarBox.find(".kalendarDates").eq(0).scrollTop( kalendarBox.find(".selectedDate").eq(0).position().top-80 );
						}
					}
				});
				
				$("body").on("click", ".kalendarDates td:not(.disabled) a", function(){
					$(this).closest(".kalendarWrapper").find("*").removeClass("selectedDate");
					$(this).closest(".kalendarWrapper").find("input[type='text']").eq(0).val($(this).data("date"));
					$(this).parent().addClass("selectedDate");
					
					var kalendarBox = $(".kalendarBox");
					switch(o.animationStyle){
						case "zoom": kalendarBox.hide("fast"); break;
						case "fade": kalendarBox.fadeOut("fast"); break;
						default: kalendarBox.hide(); break;
					}
				});
				
				$(document).click(function(e) {
					var kalendarBox = $(".kalendarBox");
					if ( $(e.target).closest('.kalendarBox, .kalendarInput').length === 0 ) {
						switch(o.animationStyle){
							case "zoom": kalendarBox.hide("fast"); break;
							case "fade": kalendarBox.fadeOut("fast"); break;
							default: kalendarBox.hide(); break;
						}
					}
				});
				
				if(o.showCloseButton){
					$("body").on("click", ".kalendarCloseButton", function(){
						var kalendarBox = $(this).closest(".kalendarBox");
						
						switch(o.animationStyle){
							case "zoom": kalendarBox.hide("fast"); break;
							case "fade": kalendarBox.fadeOut("fast"); break;
							default: kalendarBox.hide(); break;
						}
					});
				}
				
				/* SCROLLING MECHANISM */
				if(o.showScrollBar){
					$(".kalendarScrollBar").each(function(){
						var id = "#"+$(this).closest(".kalendarBox").attr("id");
						$(this).height($(id+" .kalendarDatesWrapper").height()*($(id+" .kalendarScrollArea").height()-4) / $(id+" .kalendarTable").height());
					});
				
					$(".kalendarDates").on("scroll", function(){
						var id = "#"+$(this).closest(".kalendarBox").attr("id");
						$(id+" .kalendarScrollBar").css("top", ($(this).scrollTop()*$(id+" .kalendarDatesWrapper").height()/$(id+" .kalendarTable").height()));
					});
					
					$("body").on("mousedown", ".kalendarScrollBar", function(e){
						var thisScrollBar = $(this);
						var id = "#"+$(this).closest(".kalendarBox").attr("id");
						var kalendarDates = $(id+" .kalendarDates");
						
						var thisScrollBarHeight = thisScrollBar.outerHeight();
						var thisScrollBarPos = thisScrollBar.offset().top + thisScrollBarHeight - e.pageY;
						
						$(window).on("mousemove", function(e) {
							$(id+" .kalendarScrollArea").addClass("active");
							var parentTopOffset = thisScrollBar.parent().offset().top;
							var parentBottomOffset = parentTopOffset + thisScrollBar.parent().outerHeight();
							var topOffset = e.pageY + thisScrollBarPos - thisScrollBarHeight;
							var bottomOffset = topOffset + thisScrollBarHeight;
							
							if(topOffset > parentTopOffset && bottomOffset < parentBottomOffset){
								thisScrollBar.offset({ top:topOffset })
							}
							kalendarDates.scrollTop(thisScrollBar.position().top * ( $(id+" .kalendarTable").height()/$(id+" .kalendarDatesWrapper").height()) );
						});
					});
					$("body").on("mouseup", function(){
						$(window).off("mousemove");
						$(".kalendarScrollArea").removeClass("active");
					});
				}
				/* END OF SCROLLING MECHANISM */
			
    		});
			
			function buildCalendar(obj, index, opt){
				var d = new Date();
				var currentDate = d.getDate();
				var currentDay = d.getDay();
				var currentMonth = d.getMonth();
				var currentYear = d.getFullYear();
				
				var daysInMonth = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
				
				var closeButtonHtml = '';
				if(opt.showCloseButton){
					closeButtonHtml = '<a class="kalendarCloseButton">&times;</a>';
				}
				
				var scrollAreaHtml = '';
				if(opt.showCloseButton){
					scrollAreaHtml = '<div class="kalendarScrollArea"><div class="kalendarScrollBar"></div></div>';
				}
				
				var daysHeadingHtml = '';
				for(var d=0; d<7; d++){
					daysHeadingHtml += '<th>'+opt.dayShortLabel[d]+'</th>';
				}
				
				var html = '<div class="kalendarBox '+opt.boxPosition+'" id="kalendar'+index+'" style="top: '+(obj.outerHeight()+10)+'px">'+
				closeButtonHtml+scrollAreaHtml+'<table class="kalendarHeading"><thead><tr><th colspan="7">'+opt.monthLongLabel[currentMonth]+' '+currentYear+'</th></tr><tr class="kalendarDaysHeading">'+daysHeadingHtml+'</tr></thead></table><div class="kalendarDatesWrapper"><div class="kalendarDates"><table class="kalendarTable"><tbody><tr>';
				
				var recentDate = currentDate - (currentDay - 1);
				var recentYear = currentYear;
				
				if(recentDate >= 15){
					recentDate -= 7*opt.numOfInitialRows;
					var recentMonth = currentMonth;
				}
				else{
					recentDate = daysInMonth[currentMonth-1] - (7*opt.numOfInitialRows) + recentDate;
					var recentMonth = currentMonth-1;
				}
				
				var monthMarker = currentDateClass = '';
				var dayOfWeek = 1;
				for(var i = 0;  i < opt.numOfLoadedDays; i++){
					
					dateClass = '';
					if(recentDate == currentDate && recentMonth == currentMonth){
						dateClass = 'currentDate ';
					}
					else{
						dateClass = '';
					}
					
					if(
						(recentDate < currentDate && recentMonth <= currentMonth && recentYear <= currentYear) || 
						(recentMonth < currentMonth && recentYear == currentYear) || 
						(opt.disabledDaysOfWeek.indexOf(dayOfWeek) != -1) || 
						(opt.disabledDates.indexOf(""+recentDate+"-"+(recentMonth+1)+"-"+recentYear+"") != -1)
					){
						dateClass += 'disabled ';
					}
					
					if(opt.disabledDates.indexOf(""+recentDate+"-"+(recentMonth+1)+"-"+recentYear+"") != -1){
						dateClass += 'holiday ';
					}
					
					
					
					var dataDate = "";
					dataDate = opt.dateFormat.replace("yyyy", recentYear);
					dataDate = dataDate.replace("yy", recentYear.toString().slice(-2));
					dataDate = dataDate.replace("dd", addLeadingZero(recentDate));
					dataDate = dataDate.replace("d", recentDate);
					dataDate = dataDate.replace("mm", addLeadingZero((recentMonth+1)));
					dataDate = dataDate.replace("m", (recentMonth+1));
					dataDate = dataDate.replace("MONTH", opt.monthLongLabel[recentMonth]);
					dataDate = dataDate.replace("MON", opt.monthShortLabel[recentMonth]);
					
					if(obj.closest(".kalendarWrapper").find("input[type='text']").eq(0).val() == dataDate){
						dateClass += "selectedDate "
					}
					
					html += '<td class="'+dateClass+'">';
					
					var dateHoverHtml = dateHoverClass = '';
					if(opt.showDateHover){
						dateHoverClass = 'dateHover';
						dateHoverHtml = 'data-dateHover="'+addLeadingZero(recentDate)+' '+opt.monthLongLabel[recentMonth]+' '+recentYear+'';
					}
					html += '<a class="noselect '+dateHoverClass+'" data-date="'+dataDate+'" '+dateHoverHtml+'">'+monthMarker+recentDate+'</a>';
					html += '</td>';
				
					
					if((i+1)%7 == 0){
						html += '</tr><tr>';
						dayOfWeek = 1;
					}
					else{
						dayOfWeek++;
					}
					
					if(recentDate != daysInMonth[recentMonth]){
						recentDate++;
						monthMarker = '';
					}
					else{
						recentDate = 1;
						if(recentMonth != 11){
							recentMonth++
						}
						else{
							recentMonth=0;
							recentYear++;
						}
						monthMarker = '<span class="monthMarker">'+opt.monthShortLabel[recentMonth]+'</span>'
					}
				}
				
				html += "</table></div></div>"
				
				return html;
			}
			
			function addLeadingZero(num){
				return num < 10 ? "0"+num:num;
			}
    	}
	});
	
})(jQuery);



$(function() {
    
	$(".kalendarInput").kalendar();
	
});