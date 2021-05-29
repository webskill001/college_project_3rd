

function category1(category1_status="",id=""){
    var WEBSITE_PATH = $('#WEBSITE_PATH').val();
    if(category1_status == "delete"){
        if(confirm("Do you really want to delete?")){
            category1_status = "delete";
        }else{
            category1_status = "";
        }
    }
    $.ajax({
        url: WEBSITE_PATH +"vendor_area/includes/ajax/category1_ajax.php",
        type:"post",
        data:"category1_status="+category1_status+"&cid="+id,
        success:function(res){
            var res = jQuery.parseJSON(res);
            $('#category1_error_message').html('');
            console.log(res['num']);
            var html = '';
            if(res['status'] == "product_exist"){
                $('#category1_error_message').html(res['message']);
            }
            if(res['num'] > 0){
                html += '<table class="table no-margin"><thead><tr><th width="5%">ID</th><th width="10%">Name</th><th width="55%">Description</th><th width="10%">Last Update</th><th width="20%"></th></tr></thead><tbody>';
                
                for(var i=0; i< res['record'].length;i++){
                    html += '<tr><td>'+ (i + 1) +'</td><td>'+ res['record'][i]['category1_name'] +'</td><td>'+ res['record'][i]['category1_desc'] +'</td><td>'+ res['record'][i]['last_update'] +'</td><td><div class="btn-group btn-group-sm" role="group" aria-label="Basic example">';
                    
                    var color = "danger";
                    if(res['record'][i]['category1_status'] == "active"){
                        color = "success";
                    }
                    html += '<button onclick="category1_status(' + res['record'][i]['category1_id'] + ')" type="button" class="btn btn-'+ color +' text-capitalize">'+ res['record'][i]['category1_status'] +'</button>';
                    
                    html += '<button type="button" class="btn btn-primary">Edit</button> <button type="button"  onclick="category1_delete(' + res['record'][i]['category1_id'] + ')" class="btn btn-danger">Delete</button></div></td></tr>';
                }
                
                html += '</tbody></table>';
            }else{
                html += "<h4 class='text-muted'>Not Record Found</h4>";
            }
            $('#product_category1').html(html);
            
        }
    });
}

function category1_status(id){
    category1("status",id)
}
function category1_delete(id){
    category1("delete",id)
}