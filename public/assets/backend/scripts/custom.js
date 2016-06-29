jQuery(document).ready(function(){

	jQuery('.ajax_process_form').submit(function(){
        var form_this = jQuery(this);
		Showpreloader();
		 jQuery.ajax({
            type: "POST",
            url: jQuery(this).attr('data-url'),
            data: jQuery(this).serialize(),
            cache: false,
            success: function(response)
            {
                if(response.status=='success')
                {
                    toastr.success(response.msg);
                    if(response.redirect_to != 'undefined' && response.redirect_to !='' && response.redirect_to != undefined)
                    {
                    		window.location = response.redirect_to;
                    }
                    form_this.find('input').each(function(){
                    if(jQuery(this).attr('name')!='_token')
                    {
                            jQuery(this).val('');
                    }
                });
                    if(response.refresh_table != 'undefined' && response.refresh_table != undefined && response.refresh_table!='')
                    {
                        if(response.refresh_table==1)
                        {
                                call_table_data();
                        }
                    }
                    if(response.close_modal != 'undefined' && response.close_modal != undefined && response.close_modal!='')
                    {
                        if(response.close_modal==1)
                        {
                                jQuery('.modal.in.fade').find('a[data-dismiss="modal"]').click();
                        }
                    }
                    
                }else if(response.status=='error')
                {
                    if(response.errors!='')
                    {
                        if(jQuery.type(response.errors)==='string')
                        {
                            toastr.warning(response.errors);
                        }else
                        {
                            jQuery.each(response.errors, function() {
                              jQuery.each(this, function(k, v) {
                                toastr.warning(v);
                              });
                            });
                        }
                        
                    }
                }
                
                Hidepreloader();
            },
            error:function(error,data,headers)
            {
            	Hidepreloader();
                if(headers!='')
                {
                     toastr.warning(headers);   
                }
            }
        });
		return false;
	});
	jQuery('form input').each(function(){
		if(jQuery(this).val()!=''){
			jQuery(this).addClass('has-value');
		}
	});
});

function Hidepreloader()
{
    jQuery('.overlay_box').hide();
}
function Showpreloader()
{
    jQuery('.overlay_box').show();
}

 jQuery(document).ready(function() {
    call_table_data()
    });

 function call_table_data()
 {
    if(jQuery('#TableData').length > 0)
    {
        var options = eval('[' + jQuery('#TableData').attr('data-options') + ']');

        if (jQuery.isPlainObject(options[0])) {
          options[0] = jQuery.extend({}, options[0]);
        }
        if(1==1)
        {
            
            var dataTable = jQuery('#TableData').DataTable({
                 bProcessing: true,
                 bServerSide: true,
                 sAjaxDataProp: 'aaData',
                 sAjaxSource:jQuery('#TableData').attr('data-sAjaxSource'),
                 aoColumns:eval('[' + jQuery('#TableData').attr('data-aoColumns') + ']'),
                 "aoColumnDefs" : [ {
                    "bSortable" : false,
                    "aTargets" : [ "no-sort" ]
                } ],
                "bDestroy":true
            });
        }
    }
 }
function request_delete_link(link_tag){
        Showpreloader();
           var token = jQuery('meta[name="csrf-token"]').attr('content');

    $.ajax({
        url:jQuery(link_tag).attr('data-url'),
        type: 'post',
        data: { _token :token},
        success:function(response){
            Hidepreloader();
                if(response.status=='success')
                {
                    toastr.success(response.msg);
                    if(response.redirect_to != 'undefined' && response.redirect_to !='' && response.redirect_to != undefined)
                    {
                            window.location = response.redirect_to;
                    }
                if(response.refresh_table != 'undefined' && response.refresh_table != undefined && response.refresh_table!='')
                    {
                        if(response.refresh_table==1)
                        {
                                call_table_data();
                        }
                    }
                } else if(response.status=='error')
                {
                    if(response.errors!='')
                    {
                        
                            if(jQuery.type(response.errors)==='string')
                            {
                                toastr.warning(response.errors);
                            }else
                            {
                                jQuery.each(response.errors, function() {
                                  jQuery.each(this, function(k, v) {
                                    toastr.warning(v);
                                  });
                                });
                            }
                        
                    }
                } 
        },error:function(error,data,headers)
            {
                Hidepreloader();
                if(headers!='')
                {
                     toastr.warning(headers);   
                }
            }
    });
        return false;
    }
function show_modal(target_link)
{
    var target = '';
    if(jQuery(target_link).attr('data-url').length > 0)
    {
        target = jQuery(target_link).attr('data-url');
    }else
    {
        target = jQuery(target_link).attr('href');
    }
    var ajax_title = '';
    if(jQuery(target_link).attr('title').length > 0)
    {
        ajax_title = jQuery(target_link).attr('title');
    }
    jQuery('#ajaxModal').find('.ajax_modal_title').html(ajax_title);
    jQuery('#ajaxModal').load(target, function() {
        jQuery('#ajaxModal').modal('show');
    });
    return false;
}

function ajax_process_form(form_submited)
{
     var form_this = jQuery(form_submited);
        Showpreloader();
         jQuery.ajax({
            type: "POST",
            url: jQuery(form_submited).attr('data-url'),
            data: jQuery(form_submited).serialize(),
            cache: false,
            success: function(response)
            {
                if(response.status=='success')
                {
                    toastr.success(response.msg);
                    if(response.redirect_to != 'undefined' && response.redirect_to !='' && response.redirect_to != undefined)
                    {
                            window.location = response.redirect_to;
                    }
                    form_this.find('input').each(function(){
                    if(jQuery(this).attr('name')!='_token')
                    {
                            jQuery(this).val('');
                    }
                });
                    if(response.refresh_table != 'undefined' && response.refresh_table != undefined && response.refresh_table!='')
                    {
                        if(response.refresh_table==1)
                        {
                                call_table_data();
                        }
                    }
                    if(response.close_modal != 'undefined' && response.close_modal != undefined && response.close_modal!='')
                    {
                        if(response.close_modal==1)
                        {
                                jQuery('.modal.in.fade').find('a[data-dismiss="modal"]').click();
                        }
                    }
                    
                }else if(response.status=='error')
                {
                        if(jQuery.type(response.errors)==='string')
                        {
                            toastr.warning(response.errors);
                        }else
                        {
                            jQuery.each(response.errors, function() {
                              jQuery.each(this, function(k, v) {
                                toastr.warning(v);
                              });
                            });
                        }
                }
                
                Hidepreloader();
            },
            error:function(error,data,headers)
            {
                Hidepreloader();
                if(headers!='')
                {
                     toastr.warning(headers);   
                }
            }
        });
    return false;
}