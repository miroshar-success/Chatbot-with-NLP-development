@include('avatars/head')

<style>
	.card{
		padding:20px;
	}
	.details{
		background: #F5F5F5;
	  	padding: 5px;
	  	border-radius: 10px;
	  	padding-bottom: 10px;
	  	margin-top: 10px;
		margin-bottom:10px;
	}
	.bordered{
		background: #fff;
		  padding: 8px;
		  border-radius: 10px;
		  margin-top:5px;
	}
	.details b{
		color:#1c274c !important;
	}
	.bordered input{
		float: right;
  		margin-top: 5px;
	}
	.form-check-input{
		float:right !important;
	}
	.form-switch{
		padding-left:0px !important;
	}
	.righ-check-option{
		float:right;
		width:100px;
	}
	
	.source_list{
		width:calc(100% - 50px);
		float:left;
		margin-bottom:10px;
	}
	.sources{
		
	}
	.source_btn{
		width:40px;
		margin-left: 10px;
  		margin-top: 5px;
		background:#DDDDDD;
	}
	#avatar_image{
		height:120px;
		border-radius:50%;
		width:120px;
		cursor:pointer;
	}
	#uploadimage{
		display:none;
	}
	.removebtn{
		position: absolute;
		  margin-top: 15px;
		  margin-right: 10px;
		  margin-left: -30px;
		  height: 30px;
		  width: 30px;
		  max-width: 30px;
		  padding: 5px;
		  display:none;
	}

</style>



      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
                  <div class="container-xxl flex-grow-1 container-p-y">
            
            <div class="d-flex justify-content-between">
    <h4 class="fw-bold py-3 mb-4">
          Edit Avatar
    </h4>
</div>

<!-- Category Model -->
<div class="modal fade" id="createnewscategoryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel3">Add Category</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form method="POST" id="addForm" action="#">
                        @crsf                        
                       	<div class="col mb-3">
                            <label for="nameLarge" class="form-label">Category Name</label>
                            <input type="text" id="nameLarge" class="form-control" placeholder="Category Name" name="news_category">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" form="addForm">Create</button>
            </div>
        </div>
    </div>
</div>

@if($message = Session::get('success'))
					<div class="alert alert-success alert-message">
						<i class="fa fa-check-circle"></i>
						{{ $message }}
					</div>
				@endif

<!-- Basic Bootstrap Table -->
<div class="card">
    
  
        
        <form method="POST" enctype="multipart/form-data">
        	
            @csrf
            
            
            <input type="hidden" name="file_removed" id="file_removed" value="0" />
            
                <div class="row">
                    
                    <h4>Edit Avatar</h4>
                    <p>Edit Avatar</p>
                    <hr />
                    
                    <div class="col-md-6">
                    
                    	<div class="" style="text-align:center;;margin-top:30px;">
                        	<label for="uploadimage">
                            
                                @if($avatar->image != "")
                                	
                                	<img id="avatar_image" src="{{asset('/images/' . $avatar->image)}}" />	
                                @else
                                	<img id="avatar_image" src="{{asset('/images/uploadimage.png')}}" />	
                                @endif
                        	
                            </label>
                            
                            <input type="hidden" id="defimage" src="{{asset('/images/uploadimage.png')}}" />
                            
                            <input name="dp" id="uploadimage" type="file" onchange="loadFile(event)" class="dropify" data-height="90" accept="image/*" />
                            
                            <button type="button" class="btn btn-danger removebtn">X</button>
                            
                        </div>
                    
                    	<div class="details">
                            <h4><b>Avatar Details</b></h4>
                            <div class="txt">Name and Task of Avatar</div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input class="form-control" name="avatar_name" placeholder="Type Avatar Name" required="required" value="{{$avatar->name}}" />
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control" value="{{$avatar->task}}" name="avatar_task" placeholder="Type Avatar Task" />
                                </div>
                            </div>
                        </div>
                        
                        <div class="details"
                            <h4><b>Avatar Activity</b></h4>
                            <div class="txt">Working Time</div>
                            <div class="row">
                                <div class="col-md-6">
                                    <select class="form-control" name="avatar_days" required>
                                    	
                                        <option  value="">Working Days</option>
                                        <option @if($avatar->working_days == "Every Day") selected @endif value="Every Day">Every Day</option>
                                        <option @if($avatar->working_days == "Saturday") selected @endif value="Saturday">Saturday</option>
                                        <option @if($avatar->working_days == "Sunday") selected @endif value="Sunday">Sunday</option>
                                        <option @if($avatar->working_days == "Monday") selected @endif value="Monday">Monday</option>
                                        <option @if($avatar->working_days == "Tuesday") selected @endif value="Saturday">Tuesday</option>
                                        <option @if($avatar->working_days == "Wednesday") selected @endif value="Wednesday">Wednesday</option>
                                        <option @if($avatar->working_days == "Saturday") selected @endif value="Thursday">Thursday</option>
                                        <option @if($avatar->working_days == "Friday") selected @endif value="Saturday" value="Friday">Friday</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control" name="avatar_hours" required>
                                    	<option value="">Working Hours</option>
                                        <option @if($avatar->working_hours == "5") selected @endif value="5">00:00 - 05:00</option>
                                        <option @if($avatar->working_hours == "10") selected @endif value="10">05:00 - 10:00</option>
                                        <option @if($avatar->working_hours == "15") selected @endif value="15">10:00 - 15:00</option>
                                        <option @if($avatar->working_hours == "20") selected @endif value="20">15:00 - 20:00</option>
                                        <option @if($avatar->working_hours == "24") selected @endif value="24">20:00 - 00:00</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="details"
                            <h4><b>Avatar Article</b></h4>
                            <div class="txt">Amount per Time</div>
                            <div class="row">
                                <div class="col-md-6">
                                    <select class="form-control" name="aricle_per_day" required>
                                    	<option value="">Article Per day</option>
                                        <option @if($avatar->articles_day == "2") selected @endif value="2">2</option>
                                        <option @if($avatar->articles_day == "4") selected @endif value="4">4</option>
                                        <option @if($avatar->articles_day == "6") selected @endif value="6">6</option>
                                        <option @if($avatar->articles_day == "8") selected @endif value="8">8</option>
                                        <option @if($avatar->articles_day == "10") selected @endif value="10">10</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control" name="feed_per_hour" required>
                                    	<option value="">Feeds per Hours</option>
                                        <option @if($avatar->articles_hours == "2") selected @endif value="2">Every 2 Hours</option>
                                        <option @if($avatar->articles_hours == "4") selected @endif value="4">Every 4 Hours</option>
                                        <option @if($avatar->articles_hours == "6") selected @endif value="6">Every 6 Hours</option>
                                        <option @if($avatar->articles_hours == "8") selected @endif value="8">Every 8 Hours</option>
                                        <option @if($avatar->articles_hours == "10") selected @endif value="10">Every 10 Hours</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="details"
                            <h4><b>Sharing Options</b></h4>
                            <div class="txt">Who can see the Post</div>
                            <div class="row">
                                <div class="col-md-6 ">
                                	<div class="bordered">
                                    	<label for="alluser">All Users</label>
                                    	<input @if($avatar->sharing_option == "0") checked @endif type="radio" id="alluser"  name="sharing_options" value="0"  />
                                    </div>
                                	
                                </div>
                                <div class="col-md-6">
                                    <div class="bordered">
                                    	<label for="educated_users">Educated Users</label>
                                    	<input @if($avatar->sharing_option == "1") checked @endif  type="radio" id="educated_users" name="sharing_options" value="1" checked="checked"  />
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                	<div class="bordered">
                                    	<label for="cul_users">Cultivated Users</label>
                                    	<input @if($avatar->sharing_option == "2") checked @endif  type="radio" id="cul_users" name="sharing_options" value="2"  />
                                    </div>
                                	
                                </div>
                                <div class="col-md-6 ">
                                	<div class="bordered">
                                    	<label for="ac_users">Academic Users</label>
                                    	<input @if($avatar->sharing_option == "3") checked @endif  type="radio" id="ac_users" name="sharing_options" value="3"  />
                                    </div>
                                	
                                </div>
                            </div>
                        </div>
                        
                        
                    
                    
                    <div class="details"
                            <h4><b>Reaction Options</b></h4>
                            <div class="txt">User reactions for Post</div>
                            <div class="row">
                                <div class="col-md-6 ">
                                	<div class="bordered">
                                    	<div  class="form-check form-switch mb-2">Text Comments
                                          <input @if($avatar->reaction_option_text == "1") checked @endif   class="form-check-input closetogglebtn" checked="checked" name="text_comments" type="checkbox" >
                                        </div>
                                    </div>
                                	
                                </div>
                                <div class="col-md-6">
                                    <div class="bordered">
                                    	<div  class="form-check form-switch mb-2">Voice Comments
                                          <input @if($avatar->reaction_option_voice == "1") checked @endif class="form-check-input closetogglebtn" name="voice_comments" type="checkbox" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                	<div class="bordered">
                                    	<div  class="form-check form-switch mb-2">Share Post
                                          <input @if($avatar->reaction_option_post == "1") checked @endif class="form-check-input closetogglebtn" name="share_post" type="checkbox" >
                                        </div>
                                    </div>
                                	
                                </div>
                                <div class="col-md-6 ">
                                	<div class="bordered">
                                        <div  class="form-check form-switch mb-2">Like Post
                                          <input @if($avatar->reaction_option_like == "1") checked @endif class="form-check-input closetogglebtn" name="like_post" type="checkbox" >
                                        </div>
                                    </div>
                                	
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <!-- col6 start -->
                    <div class="col-md-6">
                        <div class="details"
                            <h4><b>Text Setting</b>
                                 <div  class="form-check form-switch mb-2 righ-check-option">
                            	 	<input @if($avatar->text_setting == "1") checked @endif class="form-check-input closetogglebtn" name="text_settings" type="checkbox" >
                                </div>
                            </h4>
                            <div class="txt">Article Settings</div>
                            <div class="row">
                                <div class="col-md-6 ">
                                	<input class="form-control" value="{{$avatar->text_setting_content_type}}" name="text_settings_1" placeholder="Content Type" />
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control" value="{{$avatar->text_setting_content_type2}}" name="text_settings_2" placeholder="Content Type" />
                                </div>
                            </div>
                        </div>
                        
                        <div class="details"
                            <h4><b>Image Setting</b>
                                 <div  class="form-check form-switch mb-2 righ-check-option">
                            	 	<input @if($avatar->image_setting == "1") checked @endif  class="form-check-input closetogglebtn" name="image_settings" type="checkbox" >
                                </div>
                            </h4>
                            <div class="txt">Article Settings</div>
                            <div class="row">
                                <div class="col-md-6 ">
                                	<input class="form-control" value="{{$avatar->image_setting_content_type}}" name="image_settings_1" placeholder="Content Type" />
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control" value="{{$avatar->image_setting_content_type2}}" name="image_settings_2" placeholder="Content Type" />
                                </div>
                            </div>
                        </div>
                        
                        <div class="details"
                            <h4><b>Video Setting</b>
                                 <div  class="form-check form-switch mb-2 righ-check-option">
                            	 	<input @if($avatar->video_setting == "1") checked @endif class="form-check-input closetogglebtn" name="video_settings" type="checkbox" >
                                </div>
                            </h4>
                            <div class="txt">Article Settings</div>
                            <div class="row">
                                <div class="col-md-6 ">
                                	<input class="form-control" value="{{$avatar->video_setting_content_type}}" name="video_settings_1" placeholder="Content Type" />
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control" value="{{$avatar->video_setting_content_type2}}" name="video_settings_2" placeholder="Content Type" />
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="details"
                            <h4><b>Sources</b>
                                 
                            </h4>
                            <div class="txt">Article Sources List</div>
                            
                            
                            @php
                            	$count = 0;
                            @endphp
                            
                            @if(count($avatar->sources) > 0)
                            	<div class="row" id="sourcelist">
                                
                            	@foreach($avatar->sources as $sourc)
                                	@if($count == 0)
                                    	
                                        	<div class="col-md-12 sources" id="main_source_item">
                                    @else
                                    	
                                        	<div class="col-md-12 sources">
                                    @endif
                                        
                                        
                                            <input value="{{$sourc->source_link}}" class="form-control source_list" name="source_link[]" placeholder="Add Source Link Here" />
                                            
                                            @if($count == 0)
                                            
                                            	<button type="button" onclick="addnew();" class="btn btn-sm btn-icon source_btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Add">
                                                    <i class="bx bx-plus"></i>
                                                </button>
                                            
                                            @else
                                            
                                            	<button type="button"  class="btn btn-sm btn-icon source_btn remove" data-bs-toggle="tooltip" >
                                                <i class="bx bx-trash"></i></button>
                                            
                                            @endif
                                            
                                        
                                    </div>
                                	
                                    @php    
                                        $count++;
                                    @endphp	
                                
                                @endforeach
                                
                                </div>
                            
                            @else
                            	
                                <div class="row" id="sourcelist">
                                    <div class="col-md-12 sources" id="main_source_item">
                                        <input class="form-control source_list" name="source_link[]" placeholder="Add Source Link Here" />
                                        <button type="button" onclick="addnew();" class="btn btn-sm btn-icon source_btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Add">
                                        <i class="bx bx-plus"></i>
                                    </button>
                                    </div>
                                </div>
                            
                            @endif
                            
                            
                            
                            
                            
                            
                        </div>
                        
                        
                    </div>
                    <!-- col6 ends -->
                   
                    
                   <!-- row -->
                    </div>
               

            <div class="row">
            	<div class="col-md-12 text-center">
                
                	<a href="/avatars" class="btn btn-label-secondary">Back</a>
                	<button type="submit" class="btn btn-default" style="border: solid 2px;">Save changes</button>
            	</div>
           </div>
        </form>

    </div>



            <!-- pricingModal -->
                        <!--/ pricingModal -->

          </div>
          <!-- / Content -->

        
          <div class="content-backdrop fade"></div>
        </div>
        <!--/ Content wrapper -->
      @include('avatars/footer')
      
	  	<script>
			
			
			var imgsrc = $("#defimage").attr("src");
			
			
			
			setTimeout(function(){
				$(".alert-message").fadeOut("slow");
			}, 5000);
		
		
			function addnew(){
				var str = '<div class="col-md-12 sources">'
                str = str + '<input class="form-control source_list" name="source_link[]" placeholder="Add Source Link Here" />'
				str = str + '<button type="button"  class="btn btn-sm btn-icon source_btn remove" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove">';
				str = str + '<i class="bx bx-trash"></i></button></div>';
				
				$("#sourcelist").append(str);	
			}
			
			$(document).on("click", ".remove", function(){
				$(this).closest(".sources").html("");
				$("#file_removed").val("1");
				
			});
			
			
			var loadFile = function(event) {
				var image = document.getElementById('avatar_image');
				
				image.src = URL.createObjectURL(event.target.files[0]);
				$(".removebtn").show();
			};
			
			@if($avatar->image != "")
				$(".removebtn").show();
			@endif
			
			$(document).on("click", ".removebtn", function(){
				$("#avatar_image").attr("src", imgsrc);
				$(".removebtn").hide();
				
				var fileInput = document.getElementById('uploadimage')
			   fileInput.value = ''
			   fileInput.dispatchEvent(new Event('change'));
				
			});
		
    

</script>
	  