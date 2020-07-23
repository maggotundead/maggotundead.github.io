/* global jQuery */

// @@todo тут куча не используемого кода, необходимо выбросить лишнее

(function($){
    console.log(1);
    $(document).on('click','.pagination a',function(e){
        e.preventDefault();
       var $parent = $(this).parents('[id]');
       var url = $(this).attr('href');
       console.log('loading...',$parent[0]);
       $parent.addClass('loading');
       $parent.load( url + ' #' + $parent.attr('id') + ' > *',function(){
            $parent.removeClass('loading');
            console.log('loaded');
       } );
       window.history.pushState({"pageTitle":window.title},url, url);
    });
    
    $(window).on("popstate", function (e) {
        window.location.reload();
    });
    
    $(document).on('mousedown','.heart',function(e){
        e.preventDefault();
        e.stopPropagation();
        console.log('Favourites... sending');
        var params = {
           id : $(this).attr('data-id'),
           action: ( $(this).hasClass('favorite') ? 'remove' : 'add' ),
       };
       var csrf_param = $('[name="csrf-param"]').attr('content');
       var csrf_token = $('[name="csrf-token"]').attr('content');
       params[csrf_param] = csrf_token;
       console.log(params);
       $.get('/ajax/favourites',params,function(response){
            console.log('Favourites:',response);
        });
    });
    
    $(document).on('change click','[name="record[0][type]"]',function(){
        if( $(this).is(':checked') && $(this).val() == 'advertisement-usual' ) {
            $('.new_publicity__enter_block--vip').hide();
        } else {
            $('.new_publicity__enter_block--vip').show();
        }
    });
    
    
    /*function formatCategory (repo) {
      if (repo.loading) {
        return repo.text;
      }
      var markup = "<div class='select2-result-repository clearfix'>" +
        "<div class='select2-result-repository__avatar'><img src='" + repo.owner.avatar_url + "' /></div>" +
        "<div class='select2-result-repository__meta'>" +
          "<div class='select2-result-repository__title'>" + repo.full_name + "</div>";
      if (repo.description) {
        markup += "<div class='select2-result-repository__description'>" + repo.description + "</div>";
      }
      markup += "<div class='select2-result-repository__statistics'>" +
        "<div class='select2-result-repository__forks'><i class='fa fa-flash'></i> " + repo.forks_count + " Forks</div>" +
        "<div class='select2-result-repository__stargazers'><i class='fa fa-star'></i> " + repo.stargazers_count + " Stars</div>" +
        "<div class='select2-result-repository__watchers'><i class='fa fa-eye'></i> " + repo.watchers_count + " Watchers</div>" +
      "</div>" +
      "</div></div>";
      return markup;
    }
    function formatCategorySelection (repo) {
      return repo.full_name || repo.text;
    }*/
    

    $(document).ready(function(){
        $('.new_publicity__enter_block--vip').hide();
        
        if( $('[data-s2js]').length ){
            var s2 = setInterval(function(){
                if($('select').select2){
                    var lang = $('html').attr('lang');
                    $('[data-s2js]').each(function(){
                        var self = this;
                        var url = $(this).attr('data-s2js');
                        if(url.length > 5){
                            $(this).select2({
                              ajax: {
                                url: url,
                                dataType: 'json',
                                delay: 250,
                                cache: true,
                                data: function (params) {
                                  params[window.csrf.param] = window.csrf.value;
                                  params.format = 'json';
                                  params.type = $(self).attr('data-s2js-type');
                                  params.page = params.page || 1;
                                  return params;
                                },
                                processResults: function (data, params) {
                                  params.page = params.page || 1;
                                  return {
                                    results: data.body.records,
                                    pagination: {
                                      more: ((params.page * 30) < data.body.total)
                                    }
                                  };
                                },
                                /*data: function (params) {
                                  return {
                                    q: params.term, // search term
                                    page: params.page
                                  };
                                },
                                processResults: function (data, params) {
                                  // parse the results into the format expected by Select2
                                  // since we are using custom formatting functions we do not need to
                                  // alter the remote JSON data, except to indicate that infinite
                                  // scrolling can be used
                                  params.page = params.page || 1;
                            
                                  return {
                                    results: data.items,
                                    pagination: {
                                      more: (params.page * 30) < data.total_count
                                    }
                                  };
                                },
                                cache: true*/
                              },
                              escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
                              minimumInputLength: 1,
                              //templateResult: formatCategory,
                            //  templateSelection: formatCategorySelection
                            });        
                        }else{
                            $(this).attr('data-s2js',false).select2({});     
                        }
                    });
                    clearInterval(s2);
                }
            });
        }

    });
    
    $(document).on('change','input[type="file"]',function(){
       var self = this;
       for(var pos in this.files) if(pos > -1){
           var reader = new FileReader();
           reader.onload = function () {
                self.files.item(pos).base64 = reader.result;
                $(self).trigger('upload',self.files.item(pos));
           };
           reader.onerror = function (error) {
                self.files[pos].loading = error.message;
           };
           reader.readAsDataURL(self.files[pos]);
       }
    });
    
    $(document).on('input change paste','[maxlength]',function(e){
        var diff = $(this).attr('maxlength') - $(this).val().length;
        $(this).next('.limit').find('span').text( diff );
    });
    
     $(document).on('click','input[type="file"]',function(e){
         if(this.files.length || $(this).parent().css('background-image').length > 5 ) {
             $(this).trigger('reset').val('')[0].removeAttribute('value');
             $(this).parent()[0].removeAttribute('style');
             $(this).parent().find('input[type="hidden"]').val('');
             e.preventDefault();
         }
     });
    
    $(document).on('upload','.adver_img input[type="file"]',function(e,data){ console.log('upl adv img');
        var self = this;
        console.log(data);
        var pack = {
            _csrf : $('[name="_csrf"]').val(),
            data: data.base64,
            lastModified: data.lastModified,
            name: data.name,
            size: data.size,
            type: data.type,
        };
        $.post(window.uploadUrl,pack,function(result){
            if(data.type == 'image/png' || data.type == 'image/jpeg'){
                $(self).parent().css('background-image','url('+result+')');
                $(self).parent().find('input[type="hidden"]').val(result);
                // Add additional upload fields if run out of space
				//Adding more images
                /*if( !$('[name="record[0][image][]"]:not([value])').length ){
                    for(var pos = 0; pos < 5; pos++)
                    $(self).parent().parent().append('<label class="new_publicity__img"> <input type="file"><input type="hidden" name="record[0][image][]"> </label>');
                }*/
            } else { 
                console.log(result);
            }
        });
    });
    
    $(document).on('click','.header_search__location__popup a[data-id]',function(e){ 
        e.preventDefault();
        $('#location').html($(this).html());
        $('[name="region_title"]').val($(this).html());
        $('[name="region"]').val($(this).attr('data-id'));
    })
    
    $(document).on('click','.main__category__block, .mobile_version .main__center__category__inside a',function(){
        /// ajax/mobile-subcategory?id=2
        $('.main__center__category__section.main__center__category__inside').last().addClass('loading').load("/ajax/mobile-subcategory?id="+$(this).attr('data-id'), function(){
            $('.main__center__category__section.main__center__category__inside').removeClass('loading');
        });
    });
    
    $(document).on('click','button[data-href]',function(e){ // Верстальщик нае--ся со стилями, завязав их на тег button - quickfix
        window.location.href = $(this).attr('data-href');
    });
    
    $(document).on('click','#labeldate', function(e){
        e.preventDefault();
        var input = $(this).find('[type=checkbox]');
        input.prop('checked', !input.prop('checked'));
        input.prop('checked') === true ? $('.custom input').prop('checked', true) : $('.custom input').prop('checked', false);
    });
	
	$(document).on('submit','#search_filter',function(e){ console.log('submit search');
		var emptyinputs = $(this).find('input').filter(function(){
			return !$.trim(this.value).length;  // get all empty fields
		}).prop('disabled',true);    
	});
    
	$(document).on('blur','form.new_publicity input.email-field', function(){//validate user after input(blur)
		var is_login = $('form.new_publicity button[type=submit].submit-form ').attr('data-login');
		if(is_login==0) var res = is_user_exist();
		console.log('is exist: ', res);
	});
	
	$(document).on('submit','form.new_publicity',function(e){//validate category, city, user on submit //before submit form add aderv
		console.log('submit form ',$('form.new_publicity button[type=submit].submit-form ').attr('data-login'));
		//var is_user  = 0;
		var is_login = $('form.new_publicity button[type=submit].submit-form ').attr('data-login');
		if(is_login==0) { console.log('пользователь не авторизирован');
			var is_user= is_user_exist();
		}			
		else {
			var is_user = 0; console.log('else in check user');
		} console.log('авторизация=',is_login,' существует пользователь=',is_user);
		//is_user = 1;
		var categ_id = $('#category-dropdown').val();
		var region_id = $('#region_select').val();
		console.log('is exist: ', is_user);
		if((is_user == 1 && is_login == 0) || categ_id == 0 || region_id == 0){
			if(categ_id == 0) $('#category-dropdown .select2-selection').css('border','2px solid rgb(255, 0, 0) !important');
			if(region_id == 0) $('#region_select .select2-selection').css('border','2px solid rgb(255, 0, 0) !important');
			if($('form.new_publicity .error-submit-publ').length==0)
				$('form.new_publicity button[type=submit]').after('<span class="error-submit-publ">Проверьте заполнение полей</span>');
			e.preventDefault();
		} 
		console.log($('#category-dropdown').val());
		console.log($('#region_select').val());
		
		//rotate_img();
		$('.adver_img .all-wrap').each(function(i,n){ console.log('all-wrap');
			if($(this).find('label').hasClass('rot-90') || $(this).find('label').hasClass('rot-180') || $(this).find('label').hasClass('rot-270')){
				var img_name = $(this).find('input[type="hidden"]').val();
				img_name = img_name.split('/upload/')[1]; console.log(img_name);
				var ang_rot = $(this).find('label').attr('data-rot');
				var upl_dir = '../storage/upload/';
				rotate_img(ang_rot,upl_dir,img_name);
			}
		});
		//e.preventDefault();
	});
	
	
	
	/*$(document).on('click', '.header_search__extra .input__select li a',function(){//set choosen value in select filter for form
		console.log('click filter select', $(this).text());
		$(this).closest('.input__select').find('input[type=hidden]').val($(this).attr('data-id'));
		$(this).closest('.input__select').find('input[type=hidden]').attr('data-name', $(this).text());
	});*/
	
	$(window).on('load', function(){
		$('.header_search__extra.filter .filt').each(function(){
			var filt_sel_name = $(this).find('input[type="hidden"]').attr('name');
			filt_sel_name = filt_sel_name.substring(18, filt_sel_name.length-1);
			$(this).find('input[type="hidden"]').attr('name',filt_sel_name);
			//console.log(filt_sel_name);
		});
	});
	
	
	//old version//
	$(document).on('change','select#record_id, #category-dropdown',function(){//changing filter options for category 
		$('.header_search__extra .block-filter').css('display','none');
		console.log('change categ ',$('select#record_id').val());
		var ch_cat = $('select#record_id').val();
		//$('option:selected', this).attr('mytag');
		$('.header_search__extra .block-filter').each(function(){
			if($(this).attr('data-id') == ch_cat){
				$(this).css('display','block');
			}
		});
		
	});
	//end//
	
	$(document).on('change load','#category-dropdown',function(){//changing filter options for category #new version
		changing_name_adv();
	});
	
	$(document).ready(function(){ console.log('load for name');
		changing_name_adv();
	});
	
	function changing_name_adv(){//changing filter options for category #new version
		$('.header_search__extra .block-filter').css('display','none');
		console.log('change categ ',$('#category-dropdown').val());
		var ch_cat = $('#category-dropdown').val();
		//$('option:selected', this).attr('mytag');
		$('.header_search__extra .block-filter').each(function(){
			if($(this).attr('data-id') == ch_cat){
				$(this).css('display','block');
			}
		});
		
		if(ch_cat != 2128 && ch_cat != 2242 && ch_cat != 2243 && ch_cat && 2244 && ch_cat && 2245 && ch_cat != 2246 && ch_cat != 2247){ console.log('show title and hide address');
			$('.adress_block').hide();
			$('.adress_block .uk-input').removeAttr('required');
			$('.head_title input').show();
			$('.head_title .limit').show();
			$('.head_title .auto_title').hide();
			$('.head_title input').attr('required','required');
			
		}
		if(ch_cat == 2023 || ch_cat == 2128 || ch_cat == 2242 || ch_cat == 2243 || ch_cat == 2244 || ch_cat == 2245 || ch_cat == 2246 || ch_cat == 2247){ console.log('show address and hide title');
			$('.adress_block').show();
			$('.adress_block .uk-input').attr('required','required');
			$('.head_title input').hide();
			$('.head_title .limit').hide();
			$('.head_title').append('<span class="auto_title">Будет сгенерировано автоматически</span>');
			$('.head_title input').removeAttr('required');
			if(ch_cat == 2128 || ch_cat == 2023){ console.log('hide title and hide address');
				$('.adress_block').hide();
				$('.adress_block .uk-input').removeAttr('required');
			}
		}
		
	}
		
		
	
	
    console.log('api.js');
    
})(jQuery);

function is_user_exist(){ console.log('exist func');
	var user_mail = $('form.new_publicity input.email-field').val();
	var result = null;
	$.ajax({
		type: "get",
		url: "/ajax/get-user",
		data: {email: user_mail},
		async: false,
		success: function(data) {
            result = data;
			if(data == 1) {
				if($('form.new_publicity .for-email .error_validate').length == 0)
					$('form.new_publicity input.email-field').after('<span class="error_validate">Пользователь существует, <a href="/site/login">авторизируйтесь</a> или введите другой Email</span>');
			}
			else {
				$('form.new_publicity .for-email .error_validate').remove();
			}
        } 
     });
	console.log(result);
	return result;
}

function rotate_img(ang_rot,upl_dir,img_name){
	//var ang_rot = 90;
			$.ajax({
				url         : '/php_func/img_rotate.php',
				type        : 'POST', // важно!
				data        : { img_name: img_name, ang_rot: ang_rot, upl_dir: upl_dir},
				success     : function( respond, status, jqXHR ){ // функция успешного ответа сервера
					console.log('rotate success');
				},
				error: function( jqXHR, status, errorThrown ){ // функция ошибки ответа сервера
					console.log('rotate error');
				}
			});
}