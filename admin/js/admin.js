$(document).ready(function(){

	getAdmins();
	
	function getAdmins(){
		$.ajax({
			url : '../admin/classes/Admin.php',
			method : 'POST',
			data : {GET_ADMIN:1},
			success : function(response){
				
				console.log(response);
				var resp = $.parseJSON(response);

				if (resp.status == 202) {
					var adminHTML = '';

					$.each(resp.message, function(index, value){
						adminHTML += '<tr>'+
										'<td>#</td>'+
										'<td>'+ value.name +''+'</td>'+
										'<td>'+ value.email +'</td>'+
								
										'<td><a id="'+value.id+'" class="btn btn-sm btn-danger delete-admin"><i class="fas fa-trash-alt"></i></a></td>'+
									'</tr>';
					});

					$("#admin_list").html(adminHTML);

				}else if(resp.status == 303){
					$("#admin_list").html(resp.message);
				}
			}
		})
		
	}

	$(".add-brand").on("click", function(){

		alert();

	});
	
	
	$(document.body).on('click', '.delete-admin', function(){

		var id = $(this).attr('id');
		if (confirm("Are you sure to delete this Admin")) {
			$.ajax({
				url : '../admin/classes/Admin.php',
				method : 'POST',
				data : {DELETE_ADMIN:1, id:id},
				success : function(response){
					//alert(response.status );

					var resp = $.parseJSON(response);
						if (resp.status == 202) {
						alert(resp.message);
						getAdmins();
					}else if(resp.status == 303){
						alert(resp.message);
					}
					else{
						alert("Invalid details");
					}
				}
			})
		}else{
			alert('Cancelled');
		}

		

	});

	

});