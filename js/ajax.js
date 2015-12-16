$(function() {
	console.log('just try do not work!');

	// adding services from json in Ukrainian
	$.ajax({
		url: '/www/bin/servjson.php',
		type: 'GET',
		dataType: 'JSON',
		success: function(json){
			var j = 0;
			var out = '';
			while(j<=json.length-1){
				out += "<li><a href='#tabs-" + json[j].id + " 'data-toggle='tab'><i class='fa fa-" + json[j].spanName + "'></i>" + json[j].serviceUk + "</a></li>"; 
				j++;
			}
			$('.service[data-lang="uk"] ul').html(out);			
			$('.service[data-lang="uk"] li').click(function (e) {
			  e.preventDefault()
			  $(this).find('a').tab('show')
			});
			$('.service[data-lang="uk"] li').first().addClass('active');
			}
		});

	// adding service description from json in Ukrainian
	$.ajax({
		url: '/www/bin/servjson.php',
		type: 'GET',
		dataType: 'JSON',
		success: function(json){
			var j = 0;
			var out = '';
			while(j<=json.length-1){
				out += "<div class='tab-pane fade' id='tabs-" + json[j].id + "'><p>" + json[j].descriptionUk + "</p></div>"; 
				j++;
			}
			$('.text[data-lang="uk"]').html(out);
			$('.text[data-lang="uk"] .tab-pane').first().addClass('in active');			
			}
	});

	// adding services from json in English
	$.ajax({
		url: '/www/bin/servjson.php',
		type: 'GET',
		dataType: 'JSON',
		success: function(json){
			var j = 0;
			var out = '';
			while(j<=json.length-1){
				out += "<li><a href='#tabs-" + json[j].id + " 'data-toggle='tab'><i class='fa fa-" + json[j].spanName + "'></i>" + json[j].serviceEng + "</a></li>"; 
				j++;
			}
			console.log(out);
			$('.service[data-lang="eng"] ul').html(out);			
			$('#myTab li').click(function (e) {
			  e.preventDefault()
			  $(this).find('a').tab('show')
			});
			$('.service[data-lang="eng"] li').first().addClass('active');
			}
		});

	// adding service description from json in English
	$.ajax({
		url: '/www/bin/servjson.php',
		type: 'GET',
		dataType: 'JSON',
		success: function(json){
			var j = 0;
			var out = '';
			while(j<=json.length-1){
				out += "<div class='tab-pane fade' id='tabs-" + json[j].id + "'><p>" + json[j].descriptionEng + "</p></div>"; 
				j++;
			}
			$('.text[data-lang="eng"]').html(out);
			$('.text[data-lang="eng"] .tab-pane').first().addClass('in active');			
			}
	});

	// adding services from json in Polish
	$.ajax({
		url: '/www/bin/servjson.php',
		type: 'GET',
		dataType: 'JSON',
		success: function(json){
			var j = 0;
			var out = '';
			while(j<=json.length-1){
				out += "<li><a href='#tabs-" + json[j].id + " 'data-toggle='tab'><i class='fa fa-" + json[j].spanName + "'></i>" + json[j].servicePl + "</a></li>"; 
				j++;
			}
			$('.service[data-lang="pl"] ul').html(out);			
			$('#myTab li').click(function (e) {
			  e.preventDefault()
			  $(this).find('a').tab('show')
			});
			$('.service[data-lang="pl"] li').first().addClass('active');
			}
		});

	// adding service description from json in Polish
	$.ajax({
		url: '/www/bin/servjson.php',
		type: 'GET',
		dataType: 'JSON',
		success: function(json){
			var j = 0;
			var out = '';
			while(j<=json.length-1){
				out += "<div class='tab-pane fade' id='tabs-" + json[j].id + "'><p>" + json[j].descriptionPl + "</p></div>"; 
				j++;
			}
			$('.text[data-lang="pl"]').html(out);
			$('.text[data-lang="pl"] .tab-pane').first().addClass('in active');			
			}
	});

	// most actual news
	$.ajax({
		url: '/www/bin/newsjson.php',
		type: 'GET',
		dataType: 'JSON',
		success: function(json){
			var j = 0;
			var out = '';
			while(j<=3){
				out += "<div class='news' data-toggle='modal' data-target='#myModal' data-item='" + json[j].id + "' data-lang='uk'><img src='" + json[j].imgSrc + "' /><h5>" + json[j].titleUk + "</h5><p>" + json[j].previewUk + "</p></div>"; 				
				j++;
			}
			$('.actual h5').append(out);
			$('.news').click(function() {
				var item = $(this).data('item') - 1;
				$.ajax({
					url: '/www/bin/newsjson.php',
					type: 'GET',
					dataType: 'JSON',
					success: function(json){
						$('.modal-title').html(json[item].titleUk);
						$('.modal-body').html("<img src='" + json[item].imgSrc + "' />" + json[item].textUk);
						$('.modal-body').append("<br><p class='text-right'><i>" + json[item].dateUk + "</i></p>");
					}
				});
			});
		}	
	});

	// archive news
	$.ajax({
		url: '/www/bin/newsjson.php',
		type: 'GET',
		dataType: 'JSON',
		success: function(json){
			var j = 4;
			var out = '';
			while(j<=json.length-1){
				out += "<li data-toggle='modal' data-target='#myModal' data-item='" + json[j].id + "' data-lang='uk'><h5>" + json[j].titleUk + "</h5></li>"; 
				j++;
			}
			$('.archive ul').html(out);
			$('.archive ul li').click(function() {
				var item = $(this).data('item')-1;
				console.log(item);
				$.ajax({
					url: '/www/bin/newsjson.php',
					type: 'GET',
					dataType: 'JSON',
					success: function(json){
						$('.modal-title').html(json[item].titleUk);
						$('.modal-body').html("<img src='" + json[item].imgSrc + "' />" + json[item].textUk);
						$('.modal-body').append("<br><p class='text-right'><i>" + json[item].dateUk + "</i></p>");
					}	
				});
			});
		}	
	});

});