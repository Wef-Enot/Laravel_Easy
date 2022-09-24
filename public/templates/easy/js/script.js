var fieldsHTML = 'none';
var maskOpts = false;
$(document).ready(function () {
 
    /*==================================
     Ajax Tab || CATEGORY PAGE
     ====================================*/


    $("#ajaxTabs li > a").click(function () {

        $("#allAds").empty().append("<div id='loading text-center'> <br> <img class='center-block' src='images/loading.gif' alt='Loading' /> <br> </div>");
        $("#ajaxTabs li").removeClass('active');
        $(this).parent('li').addClass('active');
        $.ajax({
            url: this.href, success: function (html) {
                $("#allAds").empty().append(html);
                $('.tooltipHere').tooltip('hide');
            }
        });
        return false;
    });
    
    /*==================================
     Global Plugins ||
     ====================================*/

    $('.long-list').hideMaxListItems({
        'max': 5,
        'speed': 500,
        'moreText': TPL_L_07 + " ([COUNT])",
        'lessText': TPL_L_08 + " ([COUNT])"
    });

    $('.long-list-user').hideMaxListItems({
        'max': 5,
        'speed': 500,
        'moreText': TPL_L_07 + " ([COUNT])",
        'lessText': TPL_L_08 + " ([COUNT])"
    });


    //$(".scrollbar").scroller(); // custom scroll bar plugin

    // smooth scroll to the ID
    $(document).on('click', 'a.scrollto', function(event){
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 500);
    });


    // DEMO PREVIEW

    $(".tbtn").click(function () {
        $('.themeControll').toggleClass('active')
    })

    // jobs

    $("input:radio").click(function () {
        if ($('input:radio#job-seeker:checked').length > 0) {
            $('.forJobSeeker').removeClass('hide');
            $('.forJobFinder').addClass('hide');
        } else {
            $('.forJobFinder').removeClass('hide');
            $('.forJobSeeker').addClass('hide')

        }

    })

    $("#checkAll").click(function () {
        $('.add-img-selector input:checkbox').not(this).prop('checked', this.checked);
    });

    $('.select_redirect').change(function() {
        if($(this).val() != ""){
            window.location = $(this).val();
        }
      
    });
    
    $('#autocomplete-ajax').autocomplete({
        serviceUrl: TPL_PATH + 'ajax_data/autocomplete/',
        onSelect: function (suggestion) {
            $('#ajax_region_id').val(suggestion.data);
        }
    });
    
    $('#autocomplete-text').autocomplete({
        serviceUrl: TPL_PATH + 'ajax_data/autocomplete-text/',
        onSelect: function (suggestion) {
            var region = $('#ajax_region_id').val();
            if(region == '') region = 0;
            window.location = TPL_PATH + 'ajax_data/fullredirect/'+region+'/'+suggestion.data+'/';
        }
    });
    $('.autocomplete-cat').autocomplete({
        serviceUrl: TPL_PATH + 'ajax_data/autocomplete-text/',
        onSelect: function (suggestion) {
            var region = $('.add_region').val();
            if(region == '') region = 0;
            window.location = TPL_PATH + 'ajax_data/fullredirect/'+region+'/'+suggestion.data+'/';
        }
    });

    function make_region_redirect(id){
        if(TPL_REGION_ID != id){
            document.location.href = TPL_PATH + "ajax_data/redirect/?region="+id+"&backurl="+encodeURIComponent(window.location.pathname);
        }
    }   
    
    function load_region_list(id){
        current_region = id;
        $('#regionlist').hide();
        $('#region_loader_img').css('display', 'inherit');
        if(id == 0){
            $("#region_select_current").hide();       
        }
        $.ajax({
            type: "GET",
            url: TPL_PATH + "ajax_data/list/region/",
            cache: false,
            data: 'id='+id,
            success: function(data){
                var cnt = 0;
                $.each(data, function( i, val ) {
                    cnt++; // :(
                });
                
                
                if(TPL_REGION_ID == id && id !== 0 && cnt ==0){
                    $('#selectRegion').modal('toggle'); 
                    $('#regionlist').show();
                    return false;
                }
                
                
                if(cnt == 0){
                    make_region_redirect(id);
                }else{
                    $('#regionlist').html('');
                    $.each(data, function( i, val ) {
                        $('#region_loader_img').css('display', 'none');
                        $('#regionlist').show();
                        var class_name = '';
                        if(TPL_REGION_ID == val.id){
                            class_name = 'active';
                        }
                        $('#regionlist').append('<li><a href="#" class="'+class_name+'" id="rl'+val.id+'">'+val.name+'</li>');
                        $("#rl"+val.id).on("click", function(e) {
                            $('#region_select_current_name').html($(this).html());
                            $('#region_select_current').show();
                            load_region_list(val.id);
                            return false;
                        });
                    });   
                }
                


            }
        });
        
    }
    $(".selectRegion").click(function (event) {
        if(window.parent_region !== undefined){
            load_region_list(parent_region);
        }
    });

    $("#region_select_back").click(function (event) {
        if(back_region == 0 && current_region == 0){
            $('#selectRegion').modal('toggle'); 
            return false;
        }
        load_region_list(back_region);
        $.get(TPL_PATH+'ajax_data/el/region/'+back_region).done(function( data ) {
            if(data == null)back_region = 0;
            else  back_region = data.parent;
        });
        event.preventDefault();        
    });
    $("#region_select_all").click(function (event) {
        document.location.href = TPL_PATH + "change_region/?act=change_region&clean_region&backurl="+encodeURIComponent(window.location.pathname);
        event.preventDefault();        
    });
    $("#region_select_current").click(function (event) {
        make_region_redirect(current_region);
        event.preventDefault();
    });
    
    $('.btn-phone').click(function (e) {
        var el=$(this);
        var id=el.attr('id');
        var href=el.attr('href');
        if(href == '#'){
            $.ajax({
                type: "GET",
                url: TPL_PATH + "ajax_data/phone/",
                cache: false,
                data: 'data='+id,
                success: function(data){
                    if(data){
                        if(data.hide == '1'){
                            alert(TPL_L_00);
                        }else{
                            if(data.phone != ""){
                                el.children('span').html(data.phone);
                                el.attr('href', 'tel:'+data.phone);
                            }
                        }
                    }
                }
            });
            e.preventDefault();
        }

    });
    
    
    $('.contact_modal').click(function (e) {
        $('#contact_iframe').attr('src', $(this).attr('href'));
        $('#contact_iframe').ready(function () {
            $('#contact_autor_div').modal('toggle');
        });
        e.preventDefault();
    });
    $('.premium_modal').click(function (e) {
        $('#premium_iframe').attr('src', $(this).attr('href'));
        $('#premium_iframe').ready(function () {
            $('#premium_div').modal('toggle');
        });
        e.preventDefault();
    });

 $('.blogs-comment-wrapper').mouseover(function() {
        $(this).find(".editblock").css('visibility', 'visible');
      });
    $('.blogs-comment-wrapper').mouseout(function() {
        $(this).find(".editblock").css('visibility', 'hidden');
      });
  
    $('.com_delete').click(function (e) {      
        var id=$(this).attr("data-id");
        var li=$(this).parent().parent().parent().parent();
        if(confirm(TPL_L_03)){
        	$.ajax({
            type: "GET",
            data: "id="+id+"&act=delete",
             url: TPL_PATH+"comment_edit/",
             cache: true,
             success: function(html){
                if(html == 'ok'){
                    li.hide(500);
                } 
             }
        	});
            
        }

        e.preventDefault();
    });      
    $('.com_edit').click(function (e) {
        var btns = $(this).parent();
        btns.hide();
        var el=$(this).parent().parent().find(".blogs-comment-description p");
        var id=$(this).attr("data-id");
        var user_text = el.html();
        var user_text2 = user_text.replace(/(\r\n|\n|\r)/gm,"").replace(/<br\s*[\/]?>/gi, "\n");
        el.html('');
        var editTextarea = $("<textarea class='form-control'>"+user_text2+"</textarea>");
        var editBtnSave = $("<a class='btn btn-success btn-sm' href=#>"+TPL_L_02+"</a>");
        var editBtnCansel = $("<a class='btn btn-warning btn-sm' href=#>"+TPL_L_01+"</a>");
        el.append(editTextarea);
        el.append(editBtnSave);
        el.append(editBtnCansel);
        editBtnCansel.on("click", function(e) {
            el.html(user_text);
            btns.show();
            return false;
        });
        editBtnSave.on("click", function(e) {
        	$.ajax({
                type: "POST",
                data: "id="+id+"&act=save&content="+editTextarea.val(),
                url: TPL_PATH+"comment_edit/",
                cache: true,
                success: function(ans){
                    el.html(ans);
                    btns.show();
                }
            });
            return false;
        });
        e.preventDefault();
    }); 
    
    
    
    function make_select_field(obj, type, id_start, action){
        $("#alert_"+type+"_success").hide();
        if(id_start != 0){
            $("#alert_"+type+"_warning").show();
        }
        $.ajax({
            type: "GET",
            url: TPL_PATH + "ajax_data/list/"+type+"/",
            cache: false,
            data: 'id='+id_start,
            success: function(data){
                var cnt = 0;
                $.each(data, function( i, val ) {
                    cnt++; // :(
                });
                
                if(cnt == 0){
                    $("#add_"+type).val(id_start);
                    if(id_start == 0){
                        $("#alert_"+type+"_success").hide();
                        $("#alert_"+type+"_warning").show();
                    }else{
                        $("#alert_"+type+"_success").show();
                        $("#alert_"+type+"_warning").hide();
                        if(action == 'load'){
                            load_adding_form(id_start);
                        }
                    }
                }else{
                    $("#add_"+type).val("");
                    var select_cont = $("<div></div>");
                    var select = $("<select class='form-control' size=1></select>");
                    select.append("<option value=''>"+TPL_L_04+"</option>");
                    $.each(data, function( i, val ) {
                        select.append("<option value='"+val.id+"'>"+val.name+"</option>");
                    });   
                    select_cont.append(select);
                    obj.append(select_cont);
                    select.on("change", function(e) {
                        select_cont.find('div').remove();
                        id_start = $(this).val();
                        make_select_field(select_cont, type, id_start, action)
                        
                    });
                }
                return false;


            }
        });
    }    
    


    $(".multiselect").each(function(){
        var obj = $(this);
        var type = obj.attr("data-name");
        var action = obj.attr("data-action");
        var id_start = 0;
        var id_default = obj.attr("data-default");
        if(id_default == "" || id_default == "0"){
            obj.find('p').remove();
            make_select_field(obj, type, id_start, action);
        }else{
            if(action == 'load'){
                load_adding_form(id_default);
            }
        }
      }
    );
    $(".multiselect a.btn").click(function (e) { 
        var obj = $(this).parent().parent();
        var type = obj.attr("data-name");
        var id_start = 0;
        var action = '';
        if(type == 'cat') action = 'load';
        make_select_field(obj, type, id_start, action);
        $(this).parent().remove();
        e.preventDefault();
    });  

    function load_adding_form(cat){
        $("#fields_loading").show();
        $.ajax({
            type: "GET",
            url: TPL_PATH+"add_fields/",
            cache: false,
            data: "c="+cat+"&form_id="+form_id,
            success: function(html){
            	if(html != fieldsHTML){
            		$("#fields").html(html);
                    $("#fields").find('label i').tooltip();
                    $("#fields").find('.calcletters').keyup(function (e) { 
                        calcletters($(this));
                    });
                    geocoder_parse($("#fields"));
                    var phonefields = $("#fields").find('.phonemask');
                    if(phonefields.length > 0){
                        if(!maskOpts){
                            maskOpts = getMaskOpts();
                        }
                        phonefields.inputmasks(maskOpts);
                    }

            		for(var key in yamaps){
            		    var val = yamaps[key];
            		    $('#frame-'+key).attr('src', TPL_PATH+'yamaps/?field='+key+'&point='+val);
            		    $('#'+key).attr("value",val);
           			}
            		for(var key in fields){
            			if($.isArray(fields[key])){
            			    for(var k in fields[key]){
            				    var v = fields[key][k];
            				    if(v == 'ON'){
            					    $('input[type=checkbox][name="'+key+'\['+k+'\]"]').attr("checked", "checked");
           					    }
           				    }
           				}else{
            				var val = fields[key];
                            if(val != ""){
                				if($('input[name='+key+'][type=text]').length){
                					$('input[name='+key+'][type=text]').val(val);
               					}
                				if($('input[name='+key+'][type=number]').length){
                					$('input[name='+key+'][type=number]').attr("value",val);
               					}
                				if($('input[name='+key+'][type=radio]').length){
                					$('input[name='+key+'][type=radio][value='+val+']').attr("checked", "checked");
               					}
                				if($('select[name='+key+']').length){
                					$('select[name='+key+'] option[value='+val+']').attr("selected", "selected");
               					}
                				if($('textarea[name='+key+']').length){
                					$('textarea[name='+key+']').html(val);
               					}
                            }

                        }
            
         			}
         		$("#fields").trigger('load_form');
           		}
            	fieldsHTML = html;
            }
        });
    }   
    
    function calcletters(el){
        var maxletters = el.attr('maxlength');
        if(maxletters != "" && maxletters != "0" && maxletters != 0){
            var box=el.val();
            var box_name = el.attr('name');
            var main = box.length *100;
            var value= (main / maxletters);
            var count= maxletters - box.length;
            if($('#bar_'+box_name).length == 0){
                el.parent().append($('<div class="bar" id="bar_'+box_name+'"><div></div></div>'));
            }
    		if(box.length <= maxletters){
    			$('#bar_'+box_name+' div').animate(
    			{
    				"width": value+'%',
    			}, 1);
    		}
            return true;
        }
    }
    
    
    $(".calcletters").keyup(function (e) { 
        calcletters($(this));
    });  
        

    $("#password1").focusin(function (e) { 
        $("#password2").show();
        e.preventDefault();
    });  
    $("#password1").focusout(function (e) { 
        if($(this).val() == ""){
            $("#password2").hide();
        }
        e.preventDefault();
    });  

    $("#tag_block a").click(function (e) { 
        var tag = $(this).html();
        var tagsinput = $("#tagsinput");
        if(tag == ""){
            tagsinput.val("");
        }else{
            if(tagsinput.val() != ""){
                tagsinput.val(tagsinput.val() + ", " + tag);
            }else{
                tagsinput.val(tag);
            }
        }
        e.preventDefault();
    }); 
    
    $("#password2, #password1").keyup(function (e) { 
        compare_passwords();
    });    
 

    function compare_passwords(){
        var p1 = $("#password1").val();
        var p2 = $("#password2").val();
        if(p1.length < 6 && p1 != ""){
            $("#password_info").show();
        }else{
            $("#password_info").hide();
        }
        if(p1.length > 5 && p2.length > 1){
            if(p1 != p2){
                $("#password_success").hide();
                $("#password_warning").show();
            }else{
                $("#password_success").show();
                $("#password_warning").hide();
            }
        }
    }
    
    
    $(".m_delete").click(function (e) { 
        var id = $(this).attr('data-id');
        if(confirm(TPL_L_03)){
    		$.ajax({
                type: "GET",
                url: $(this).attr('href'),
                cache: false,
                success: function(html){
                    $('#message_'+id).hide(500);
                }
    		});
            
        }
        e.preventDefault();
    });
    
    
    $('#panel_delete').click(function(event) {
        var str = "";
        var selected = false;
        $(".panel_check").each(
          function(){
            var el = $(this);
            if(el.prop("checked")){
                str = str + '&id[]=' + el.val();
                selected = true;
            }
          }
        );
        if(selected == false){
            alert(TPL_L_06);
        }else{
            if(confirm(TPL_L_03)){
            	$.ajax({
                type: "GET",
                 url: TPL_PATH+"group_actions/?ok"+str,
                 cache: true,    
                 success: function(html){
                    if(html == 'restore'){
                        document.location.href = TPL_PATH+"restore/?array"+str
                    }else{
                        $(".panel_check").each(
                          function(){
                            var el = $(this);
                            if(el.prop("checked")){
                                $('#message_' + el.val()).hide(500);
                            }
                          }
                        );
                    }

                 }
            	});   
            }                
        }
       	event.preventDefault();   
  });    

    $('#panel_upd').click(function(event) {
        var str = "";
        var selected = false;
        var frm = $("#upd_form");
        frm.html("");
        $(".panel_check").each(
          function(){
            var el = $(this);
            if(el.prop("checked")){
                frm.append('<input type=hidden name=msg[] value='+el.val()+'>')
                selected = true;
            }
          }
        );
        if(selected == false){
            alert(TPL_L_06);
        }else{
            if(confirm(TPL_L_03)){
                 frm.submit();
            }                
        }
       	event.preventDefault();   
  });

  
    $('#shop_pay_prolong').click(function(event) {
        var el = $('#shop_pay_prolong_cont');
        if(el.css('display') == 'none'){
            el.show(500);
        }else{
            el.hide(500);
        }
        event.preventDefault();
      });


    if($('.phonemask').length > 0){
        if(!maskOpts){
            maskOpts = getMaskOpts();
        }
        $('.phonemask').inputmasks(maskOpts);
    }
    
    if($('#rphone').length > 0){
        var maskList = $.masksSort($.masksLoad(TPL_PATH_THEME+"inputmask/phone-codes.json"), ['#'], /[0-9]|#/, "mask");
        var maskOpts = {
            inputmask: {
                definitions: {
                    '#': {
                        validator: "[0-9]",
                        cardinality: 1
                    }
                },
                clearIncomplete: false,
                showMaskOnHover: false,
                autoUnmask: true,
                oncomplete: function(){ 
                    var text1 = $(this).attr('data-text1');
                    $("#sendsms").attr('value', text1+': '+$(this).val());
                    $("#sendsms").attr('name', $(this).val());
                    $("#phone_confirm").show(500);
                } 
            },
            match: /[0-9]/,
            replace: '#',
            list: maskList,
            listKey: "mask",
            onMaskChange: function(maskObj, completed) {
                $(this).attr("placeholder", $(this).inputmask("getemptymask"));
            }
        };
        $('#rphone').inputmasks(maskOpts);
    }

	$('#sendsms').click(function(event){
    	var phonenumber = $(this).attr('name');
        var text1 = $(this).attr('data-text1');
    		$.ajax({
    	    type: "GET",
    	     url: TPL_PATH+"sendsms/?num="+phonenumber,
    	     cache: true,
    	     success: function(html){
    	     	if(html == 'ok')
    		     	{
    			    alert(text1+': '+phonenumber);
    		     	}
    			else
    				{
    			    alert(html);
    				}
    			}
   		});
        event.preventDefault();
	});    

    $('#changephone').click(function(event) {
        $("#phone_field").toggle(500);
        event.preventDefault();
      });

    function getMaskOpts(){
        var maskList = $.masksSort($.masksLoad(TPL_PATH_THEME+"inputmask/phone-codes.json"), ['#'], /[0-9]|#/, "mask");
        var maskOpts = {
            inputmask: {
                definitions: {
                    '#': {
                        validator: "[0-9]",
                        cardinality: 1
                    }
                },
                //clearIncomplete: true,
                showMaskOnHover: false,
                autoUnmask: true
                //oncomplete: function(){ alert('inputmask complete'); } 
            },
            match: /[0-9]/,
            replace: '#',
            list: maskList,
            listKey: "mask",
            onMaskChange: function(maskObj, completed) {
              
                
                // $("#date").inputmask("99/99/9999",{ "oncomplete": function(){ alert('inputmask complete'); } });
                $(this).attr("placeholder", $(this).inputmask("getemptymask"));
            }
        };
        return maskOpts;
    }

         
    if($('.block_search').length > 0){
        var cat_id = $(this).find('.add_cat').val();
        var map = $(this).find('.add_map').val();
        var ajax_cont = $(this).find('.block_search_ajax');
        if (window.shop_id !== undefined) {
            $(".shop_id").val(shop_id);
            $(".shop_name").html(shop_name);
            $(".shop_search").show();
        }
        $.ajax({
            type: "GET",
            data: "cat_id=" + cat_id + "&map="+map,
            url: TPL_PATH+"search_ajax/",
            cache: true,
            success: function(html){
                ajax_cont.html(html);
                if (window.must !== undefined) {
            		for(var k in must){
                        var v = must[k];
            			if(v == 'ON'){
            				$('input[type=checkbox][name="must['+k+']"]').attr("checked", "checked");
           				}    		    
           			}
            		for(var k in cond){
                        var v = cond[k];
            			if(v != ''){
            				$('select[name=cond_f_'+k+'] option[value='+v+']').attr("selected", "selected");
           				}    		    
           			}
                    if(sort_by != ""){
                        $('input[name=sort_by][type=radio][value='+sort_by+']').attr("checked", "checked");
                    }
                    if(desc != ""){
                        $('input[name=desc][type=checkbox]').attr("checked", "checked");
                    }
                    
                    $('.slider-inputs').each(function(){
                        var el = $(this);
                        el_id = el.find('.slider-cont').attr('data-id')
                        var checkbox = el.next().find('input');
                        if(fields[el_id] != undefined){
                            checkbox.prop('checked', '');
                            range_setnames(el);
                        }else{
                            checkbox.prop('checked', 'checked');
                        }
 
                        
                    });
                    
            	for(var key in fields){ 
            			if($.isArray(fields[key])){
            			    for(var k in fields[key]){
            				    var v = fields[key][k];
                                if(v != ""){
                                    if($.isNumeric(k)){
                                        $('input[type=checkbox][name="'+key+'['+v+']"]').attr("checked", "checked");
                                    }else{
                                        $('input[name="'+key+'['+k+']"]').val(v);
                                    }
                                }
    				        }
        				}else{
            				var val = fields[key];
                            if(val != ""){
                				if($('input[name='+key+'][type=text]').length){
                					$('input[name='+key+'][type=text]').attr("value",val);
               					}
                				if($('input[name='+key+'][type=number]').length){
                					$('input[name='+key+'][type=number]').attr("value",val);
               					}
                				if($('input[name='+key+'][type=radio]').length){
                					$('input[name='+key+'][type=radio][value='+val+']').attr("checked", "checked");
               					}
                				if($('select[name='+key+']').length){
                					$('select[name='+key+'] option[value='+val+']').attr("selected", "selected");
               					}
                				if($('textarea[name='+key+']').length){
                					$('textarea[name='+key+']').html(val);
               					}
                            }

                        }
         			}
                    

                }else{
                    $(".slider-disabler").find('input[type=checkbox]').attr("checked", "checked");
                }

                if($('.slider-disabler input').length > 0){
                    $('.slider-disabler input').each(function(){
                        if($(this).prop('checked')){
                            var el = $(this).parent().prev();
                            el.addClass('slider-disabled');
                        }
                    });
                }
                

                $('.slider-disabler input').click(function(event) {
                    var el = $(this).parent().prev();
                    if($(this).prop('checked')){
                        el.addClass('slider-disabled');
                        el.find('input').attr('name', '');
                    }else{
                        el.removeClass('slider-disabled');
                        range_setnames(el);
                    }   
                });  
                
                function rstr(str){
                    return parseFloat(str.toFixed(2));
                }
                function getstep(max){
                    var step = 1;
                    if(max < 5) step = 0.1;
                    if(max < 1) step = 0.01;
                    return step;
                }
                
                function makeslider(el, el_rate, slider, from_val, to_val, setvalue=false){
                    var min = el.attr('data-min');
                    var max = el.attr('data-max');
                    el.find('.rate').removeClass('active');
                    el.find('.rate_value').val(el_rate.attr('data-id'));
                    el_rate.addClass('active');
                    var rate = parseFloat(el_rate.attr('data-rate'));
                    change_min = rstr(min/rate); 
                    change_max = rstr(max/rate); 
                    if(change_max > 5){
                        change_max = Math.ceil(change_max);
                        change_min = Math.floor(change_min);
                    }
                    change_step = getstep(change_max);                
                    change_from = rstr(from_val/rate); 
                    change_to = rstr(to_val/rate); 
                    slider.slider( "option", "min", change_min );
                    slider.slider( "option", "max", change_max );
                    slider.slider( "option", "step", change_step );
                    if(setvalue){
                        change_min = from_val;
                        change_max = to_val;
                    }
                    slider.slider( "values", [change_min, change_max] );
                    el.find(".from").val(change_min);
                    el.find(".to").val(change_max);                   
                }
                
                $('.slider-cont').each(function(){
                    var el = $(this);
                    var range = el.find(".slider-range");
                    var from = el.find(".from");
                    var to = el.find(".to");
                    var min = el.attr('data-min');
                    var max = el.attr('data-max');
                    var from_val = from.val();
                    if(from_val == 0) from_val = min;
                    var to_val = to.val()
                    if(to_val == 0) to_val = max; 
                    var step = getstep(max);
                    var slider = range.slider({
                        range: true,
                        min: parseFloat(min),
                        max: parseFloat(max),
                        step: step,
                        values: [ parseFloat(from_val), parseFloat(to_val) ],
                        slide: function( event, ui ) {
                            from.val(ui.values[0]);
                            to.val(ui.values[1]);
                        }
                    });
                    from.val(range.slider("values", 0));
                    to.val(range.slider("values", 1));
                                    
                    from.keyup(function() {
                        slider.slider( "values", [from.val(), to.val()] );
                    });
                    to.keyup(function() {
                        slider.slider( "values", [from.val(), to.val()] );
                    });
                    
                    el.find('.rate').click(function(event) {
                        makeslider(el, $(this), slider, from_val, to_val);
                        event.preventDefault();
                      });
                      var currency = el.find('.rate_value').val();
                      elements = el.find('.rate');
                      elements.each(function(){
                            if((currency == '' && $(this).hasClass('active')) || currency == $(this).attr('data-id')){
                                makeslider(el, $(this), slider, from_val, to_val, true);
                                return false;
                            }
                      });
                });
            }
        });
    }
    
    $('.a-submit').click(function(event) {
        var block_search = $(this).parents('.block_search');
        var el = block_search.find('.'+$(this).attr('data-var'));
        el.val($(this).attr('data-value'));
        block_search.find('form').submit();
        event.preventDefault();
      });
    $('#search_btn').click(function(event) {
        $('.search_panel').toggle();
        event.preventDefault();
      });         
    $('.gotomap').click(function(event) {
        var cont = $(this).parents('div');
        var form_search = cont.find('form[name=block_search]');
        $('.add_map').val(1);
        form_search.submit();
        event.preventDefault();
      });         
    $('.gotosite').click(function(event) {
        var form_search = $('form[name=block_search]');
        $('.add_map').val(0);
        form_search.submit();
        event.preventDefault();
      });         
 
    $(".license").click(function (event) {
        $('#license_text').modal('toggle'); 
        event.preventDefault();        
    });   
    
        $('#welcome_region').modal('toggle'); 
        $("#welcome_region_cansel").click(function (event) {
            $('#welcome_region').modal('toggle'); 
            event.preventDefault();        
        });
        $("#welcome_region_change").click(function (event) {
            load_region_list(0);
            $('#welcome_region').modal('toggle');
            $('#welcome_region').on('hidden.bs.modal', function () {
                $('#selectRegion').modal('toggle');
                $('#welcome_region').off('hidden.bs.modal');  
            });
            event.preventDefault();        
        });

function ScrollToFrom(msg){
        $('html, body').animate({
                scrollTop: $("#order_iframe").offset().top-100
            }, 1000);
        $('#order_iframe').attr('src', TPL_PATH+'services.html?message_id='+msg+'&service='+$('#load_order_iframe').attr('data-type'));     
    }
 
    $('#load_order_iframe .panel_check').click(function (event) {
        ScrollToFrom($(this).val());
    });    
    if(window.ScrollToFromGl !== undefined) ScrollToFrom(ScrollToFromGl);

    function chat_insert(row, before=false){
        var html = '<tr id="pm_row_'+row.id+'" data-time="'+row.sent_tm+'"><td><div class="pm-row pm-'+row.tpl+'">';
        html += '<div class="pm-info">'+TPL_L_SENT+': '+row.date_sent+', ';
        html += '<span class="pm-date-read">'+((row.received_tm == 0) ? TPL_L_UNREAD : TPL_L_READ + ' '+ row.date_received)+'</span>';
        if(row.type != 'pm')  html += ', '+TPL_L_SOURCE+' &mdash; '+row.source;
        html += ', <span class="pm-deletemsg"> '+TPL_L_DELETE+'</span>';
        html += '</div>';
        html += '<div class="pm">'+row.text+'</div>';
        html += '</div></td></tr>';
        if(before){
            $('#pm-chat tbody').prepend(html);
        }else{
            $('#pm-chat tbody').append(html);
        }
        
        if ($( document ).width() > 768) {
        $('.pm-row').mouseover(function() {
            $(this).children('.pm-info').css('visibility', 'visible');
          });
        $('.pm-row').mouseout(function() {
            $(this).children('.pm-info').css('visibility', 'visible');
          });
        }
          
    }
 
    if(window.chat_data !== undefined){
        for(var i = 0, len = chat_data.length; i < len; i++) {
            chat_insert(chat_data[i]);
        } 
        pm_scroll();
        setTimeout(function() {pm_chat_update();}, 2000);
    }

    function pm_chat_update(){
        pm_get_new();
        setTimeout(function() {
            pm_chat_update();
        }, 5000);
    }

    $('#pm-msgbtn').click(function(event) {
        var el = $('#pm-msgbox');
        var txt = el.val();
        if($.trim(txt) != ""){
            var recipient = el.attr('data-recipient');
            $.post( TPL_PATH+'users/pm/post/', { msg: txt, recipient:recipient}).done(function( data ) {
                data = data.split('|split|');
                if(data[1]){
                    el.val('');
                    pm_get_new();
                }
            });
        }

        event.preventDefault();
      });    
    $("#pm-msgbox").keypress(function(e){
        if(e.which == 13 && e.ctrlKey == true){
            $('#pm-msgbtn').trigger('click');
        }
    });
    
    function pm_get_new(){
        var id = 0;
        $('#pm-chat tbody tr').each(function(){
            id = $(this).attr('data-time');
        });
        $.get(TPL_PATH+'users/pm/get/from/'+$('#pm-chat').attr('data-user')+'/'+id).done(function( data ) {
            data = data.split('|split|');
            if(data[1]){
                var chat_data = jQuery.parseJSON(data[1]);
                var pm_allow_scroll = false;
                for(var i = 0, len = chat_data.chat.length; i < len; i++) {
                    chat_insert(chat_data.chat[i]);
                    pm_allow_scroll = true;
                }
                for(var i = 0, len = chat_data.readed.length; i < len; i++) {
                    $('#pm_row_'+chat_data.readed[i].id+' span.pm-date-read').html(TPL_L_READ+': '+chat_data.readed[i].date_received);
                }
                if(pm_allow_scroll) pm_scroll();
            }
        });
    }
    
    function pm_scroll(){
		var height = $('#panel_ads').height()+200;
		$('#pm-chat').scrollTop(height);
    }
    
    $('#pm-chat').scroll(function(el){
        if($('#pm-chat').scrollTop() == 0){
            var old_height = $('#panel_ads').height();
            $("#pm_loader").show();
            var id = $('#pm-chat tbody tr').first().attr('data-time');
            $.get( TPL_PATH+'users/pm/get/to/'+$('#pm-chat').attr('data-user')+'/'+id).done(function( data ) {
                data = data.split('|split|')
                if(data[1]){
                    
                    var chat_data = jQuery.parseJSON(data[1]);
                    for(var i = 0, len = chat_data.length; i < len; i++) {
                        chat_insert(chat_data[i], true);
                    } 
                    var new_height = $('#panel_ads').height();
                    $('#pm-chat').scrollTop(new_height - old_height);
                    $("#pm_loader").hide();
                }
            });
        }
    });
    
    if($('.pm_counter').length > 0){
        update_pm_counter();
    }
    function update_pm_counter(){
        $.get({url: TPL_PATH+'ajax_data/pm/', cache: false} ).done(function( data ) {
            if(data.cnt > 0){
                $('.pm_counter').html(data.cnt);
                $('.pm_counter').show();
            }
        });
        setTimeout(function() {
            update_pm_counter();
        }, 10000);
    }
    $('.pm-table div.pm-row').mouseout(function(e){
        $(this).removeClass('pm-3');
    });
    $('.pm-table div.pm-row').mouseover(function(e){
        $(this).addClass('pm-3');
    });
    $('.pm-table div.pm-row').click(function(e){
        document.location.href=$(this).attr('data-url');
    });
    $('.pm-delete').click(function(e){
        var el = $(this);
        if(confirm(TPL_L_03)){
        	$.get(el.attr('href')).done(function( data ) {
        	   el.parents('tr').hide(500);
            });
        }
        e.preventDefault();
    });
    $('#pm-chat').on('click', '.pm-deletemsg', function () {
        var tr = $(this).parents('tr');
        var id = tr.attr('id').substr(7);
        if(confirm(TPL_L_03)){
        	$.get( TPL_PATH+'users/pm/delete/msg/'+id).done(function( data ) {
        	   tr.hide(500);
            });
        }
        return false; 
    });
    
var geocoder_obj;
    var geocoder_new = '';
    var geocoder_last = '';
    var geocoder_enabled = false;
    var geocoder_cache = {};
    var current_suggestion = -1;


    function geocoder_parse(obj){
        obj.find('input[type=text]').each(function(){
            var el = $(this);
            if(el.attr('data-map') > 0){
                $(this).keyup(function (e) { 
                    var up_key = e.originalEvent.key;
                    if(up_key != 'ArrowDown' && up_key != 'ArrowUp' && up_key != 'Enter'){
                        selectaddr($(this));
                    }
                });
            }
        });
    }
    
    function selectaddr(el){
        if(window.YAAPI !== undefined){
            var next_el = el.next();
            if(!next_el.hasClass('suggestion_cont')){
                $('<div class="suggestion_cont"><div class="suggestion"></div></div>').insertAfter(el);
                el.on( "keydown", function( event ) {
                  var up_key = event.originalEvent.key;  
                  if(event.originalEvent.key == 'ArrowDown'){ 
                    console.log('down');
                    suggestion_select(1);
                  }
                  if(event.originalEvent.key == 'ArrowUp'){ 
                    console.log('up');
                    suggestion_select(-1);
                  }
                  if(event.originalEvent.key == 'Enter'){ 
                    console.log('enter');
                    geocoder_obj.next().find(".sg"+current_suggestion).trigger( "click" );
                    event.preventDefault(); 
                  }
                } );
            }
            geocoder_obj = el;
            if(YAAPI != ''){
                geocoder_new = el.val();
                if(geocoder_cache[geocoder_new] != undefined){
                    geocoder_gui(geocoder_cache[geocoder_new]);
                    geocoder_last = geocoder_new;
                }
                if(!geocoder_enabled){
                    update_geoquery();
                    geocoder_enabled = true;
                }
            }
        }
    }
    
    
    function update_geoquery(){
        if(geocoder_new != geocoder_last){
            if(geocoder_new != ''){
                geocoder_last = geocoder_new;
                if(geocoder_new.length > 3){
                    if(geocoder_cache[geocoder_new] === undefined){
                        var url = 'https://geocode-maps.yandex.ru/1.x/?apikey='+YAAPI+'&format=json&geocode='+geocoder_new;
                    	$.get(url).done(function( data ) {   
                    	   geocoder_cache[geocoder_new] = data;
                    	   geocoder_gui(data);
                        });
                    }else{
                        geocoder_gui(geocoder_cache[geocoder_new]);
                    }

                }
            }else{
                geocoder_enabled = false;
                return false;
            }
        }
        setTimeout(function() {
            update_geoquery();
        }, 1000); 
    }
    
    //парсинг и отображаение данных геокодера
    function geocoder_gui(data){
        var elements = data.response.GeoObjectCollection.featureMember;
        var el = geocoder_obj.next().find('.suggestion');
        el.html('');
        el.show();
        for(var key in elements){
            var val = elements[key].GeoObject;
            var descr = val.description;
            descr = descr.split(', ');
            descr.reverse();
            descr = descr.join(', ');
            if(descr != '') descr = descr+', ';
            var html = '<div class="sg'+key+' suggetion_item" data-pos="'+val.Point.pos+'" data-title="'+val.name+'">'+descr+val.name+'</div>';
            el.append(html);
        }
        current_suggestion = -1;
    }
    
    // переключатель элементов списка
    function suggestion_select(num){
        current_suggestion = current_suggestion + num;
        var max_suggestion = geocoder_obj.next().find('.suggetion_item').length - 1;
        if(current_suggestion > max_suggestion) current_suggestion = max_suggestion;
        if(current_suggestion < 0) current_suggestion = 0;  
        geocoder_obj.next().find(".shovered").removeClass('shovered');
        geocoder_obj.next().find(".sg"+current_suggestion).addClass('shovered');
        geocoder_obj.val(geocoder_obj.next().find(".sg"+current_suggestion).html());
    } 
    
  
    $(document).mouseup(function (e) {
        var container = $(".suggestion");
        if (container.has(e.target).length === 0){
            container.hide();
        }
    });
    
    $('#fields').on('click', '.suggetion_item', function(event){     
        $(this).parent().hide();
        var iframe = document.getElementById('frame-f_'+geocoder_obj.attr('data-map')).contentWindow;
        var coord = $(this).attr('data-pos').split(' ');
        var title = $(this).attr('data-title');    
        geocoder_obj.val($(this).html());   
        iframe.setpoint(coord, title);       
    });
    
    $('#more').click(function (e) {
        e.preventDefault();
        var el = $(this);
        if(window.ajax_current_page !== undefined){
            if(ajax_current_page==1) ajax_current_page = 2;
            var url = 'page'+ajax_current_page+'.html';
            if(ajax_uri == '') ajax_uri = ajax_uri+'?ajax';
            else{
                if(ajax_uri == '?') ajax_uri = ajax_uri+'ajax';
                else ajax_uri = ajax_uri+'&ajax';
            }
            
            
            url = ajax_dir+url+ajax_uri;
            /*
            if(window.location.search != ""){
                url = url+window.location.search+'&ajax'
            }else{
                url = url+'?ajax'
            }*/

        	$.get(url).done(function( data ) {   
        	   var list = $(data).find('.tab-pane').html();
               var paginator = $(data).find('.pagination').html();
               $('#allAds').append(list);
               $('.pagination').html(paginator);
               ajax_current_page++;
               if(ajax_current_page >= ajax_max_pages +1){
                el.parent().hide(500);
               }
            });
            
        }
    });

    $('#allAds').on('click', '.notepad', function(event){     
        notepad($(this));
        event.preventDefault();
    });

    $('.notepad').click(function(e){
        notepad($(this));
        e.preventDefault();
    });
    
    function notepad(el){
        var id=el.attr("data-id");
        var n_count = $('.n_count').html();
    	$.ajax({
        type: "GET",
         url: TPL_PATH + "fav/",
         cache: false,
         data: "id="+id,
         success: function(html){
            n_count = parseInt(n_count);
         	if(html == '1'){
   	            el.removeClass('ic-star-act',500);
    			el.addClass('ic-star',500);
                $('.n_count').html(n_count - 1);
  			}
         	if(html == '2'){
   	            el.removeClass('ic-star',500);
    			el.addClass('ic-star-act',500);
                $('.n_count').html(n_count + 1);
  			}
        }
	   });
    }
	
	   
    function range_setnames(el){
        var el_id = el.find('.slider-cont').attr('data-id');
        el.find('.from').attr('name', el_id+'[from]');
        el.find('.to').attr('name', el_id+'[to]');
        el.find('.rate_value').attr('name', el_id+'[rate]');
    }
	
	$('#region-modal-filter').keyup(function (e) { 
        var search_text = $(this).val();
        search_text = search_text.toUpperCase();
        if(search_text == ''){
            $('#regionlist li').show();
        }else{
            $('#regionlist li').hide();
            $('#regionlist li').each(function(){
                var txt = $(this).text().toUpperCase();
                if(txt.indexOf(search_text) >= 0){
                    $(this).show();
                }
            });
        }
    });
    $('#region-modal-clear').click(function (e) { 
        e.preventDefault();
        $('#region-modal-filter').val('');
        $('#regionlist li').show();                
    });
    $("#selectRegion").on('shown.bs.modal', function(){
        $('#region-modal-filter').focus();
    });    
    
}); // end Ready