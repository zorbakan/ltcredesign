function MapOfCostsManager(){
	var self = this;
	self.dom_map_container = '#map_container';

	this.init = function(map_container) {
		self.dom_map_container = map_container || self.dom_map_container;
		self.load_map();
		self.get_cost_of_care_points();
	};

	this.get_cost_of_care_points = function() {
		var datasubmited = {state: CURRENT_STATE};
		var ws = {
			type: 'POST',
			dataType : "json",
			data: datasubmited,
			complete : self.get_cost_of_care_points_ok,
			url : BASE_URL+"cost_of_care/get_map_points"
		}
		$.ajax(ws);
	};

	this.get_cost_of_care_points_ok = function(data) {
    var response = data['responseText'];
    try{
        response = $.parseJSON( response )
    }catch(e){
        response = {'result':'not_json'};
    }
    if (response['result'] == 'ok'){
        self.load_cost_of_care_points(response['map_points']);
    }else{
        console.log(response);
    }
	};

	this.load_cost_of_care_points = function(map_points) {
		for (var i = 0; i < map_points.length; i++) {
			var a_point = map_points[i];
			$(self.dom_map_container).jHERE(
					'marker', 
					[parseFloat(a_point.lat), parseFloat('-'+a_point.long)], 
					{
			    	icon: BASE_URL+'img/money_pin_30.png',
			    	text: a_point.city,
		        anchor: {x: 15, y: 19},
		        click: self.add_bubble_to_map,  
		        mouseover : self.add_bubble_to_map,  
	        	point_info : a_point
	        }
		    );

			if (i==0){
				//$(self.dom_map_container).jHERE('center', {latitude: parseFloat(a_point.lat), longitude: parseFloat('-'+a_point.long)});
			}
		};
	};

	this.load_map = function() {
		$(window).on('load', function(){
        $(self.dom_map_container).jHERE({
            enable: ['behavior'],
            center: [26.664167, -80.838611],
            zoom: 5,
            type: 'smart'
        });
    });
	};

	this.add_bubble_to_map = function(event) {
		var point_info = event.target.point_info;
		var content_to_show = '';
		content_to_show += '<div style="text-align:center"><legend>'+point_info.city+'</legend></div>';
		content_to_show += 'Home Care: $'+self.number_format(point_info.home)+'<br>';
		content_to_show += 'Assisted Care: $'+self.number_format(point_info.assisted)+'<br>';
		content_to_show += 'Nursing Care: $'+self.number_format(point_info.nursing)+'<br>';
		$(self.dom_map_container).jHERE('bubble', [event.geo.latitude, event.geo.longitude], {
			 content: content_to_show,
			 closable: true,
			 onclose: function(){}
			});
	};

	this.number_format = function(number, decimals, dec_point, thousands_sep) {
    var n = !isFinite(+number) ? 0 : +number, 
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        s = '',
        toFixedFix = function (n, prec) {
            var k = Math.pow(10, prec);
            return '' + Math.round(n * k) / k;
        };
    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
	}
}
