@include('avatars/head')

<style>	
	.avatar_details{
		background: #f3f3f3;
	  	padding: 10px;
	  	border-radius: 10px;
	  	padding-bottom: 10px;
	  	margin-top: 5px;
	}
	.w-px-40{
		height:40px !important;
	}
	.upper{
		text-transform:uppercase;
	}
	.text-rigth{
		float:right;
	}
	.av_image{
		width:100%;
		border-radius:5px;
	}
	.card{
		padding-top:10px;
		padding-bottom:20px;
	}
	.heading {
		font-weight:bold;
		font-size:18px;
		color:#1c274c;
	}
	.details{
		margin-bottom:10px;
	}
	.dashhr{
		width: 60%;
		  text-align: center;
		  margin: auto;
		  color:#fff !important;
		  border-top: 4px solid;
	}
	.postshr{
		margin-bottom:20px !important;
		  text-align: center;
		  margin: auto;
		  color:#fff !important;
		  border-top: 4px solid;
	}
	.feeds_div{
		margin:auto;
		
	}
	.feeds_container{
		padding:10px;
	}
	.w-px-30{
		height:30px;
		width:30px;
		float:left;
		margin-right:5px;
	}
	.post_avatar{
		width:100px;
		float:left;
		font-size:13px;
		
	}
	.post_time{
		float:right;
		color:#44Af74;
		font-weight:bold;	
	}
	.heading_post{
		font-weight:bold;
	}
	.post_img img{
		width:100%;
		border-radius:5px;
	}
	.feeds{
		background:#fff;
		padding:5px;
		border-radius:10px;
	}
	.folors{
		margin-top:10px;
	}
	.fol_img{
		height:30px;
		width:30px;
		border-radius:50%;
		position: relative;
  margin-left: -15px;
	}
	.z-100{
		z-index:100;
	}
	.z-90{
		z-index:90;
	}
	.z-80{
		z-index:80;
	}
	.z-70{
		z-index:70;
	}
	.z-60{
		z-index:60;
	}
	.z-50{
		z-index:50;
	}
	.z-40{
		z-index:40;
	}
	.z-30{
		z-index:30;
	}
	
	.postbox{
		background:#fff;
		padding:5px;
		border-radius:5px;
		margin-bottom: 15px;
	}
	.article_txt{
		width:100%;
	}
	.artilce_title{
		float:left;
		width:50%;
		font-size:13px;
	}
	.article_time{
		width:50%;
		float:left;
		text-align:right;	
	}
	.article_details{
		background:#f3f3f3;
		border-radius:5px;
		margin-top: 8px;
		padding:5px;
		margin-bottom: 5px;
	}
	.btn-share{
		font-size:11px;
		padding: 1px 8px;
	}
	.btn-share-like{
		background:#44Af74;
		
	}
	.btn-share-denied{
		
		background:#F2555B;
	}
	.btn-share-like span{
		font-size: 18px;
  		margin-right: 5px;
  		margin-top: -2px;
	}
	.btn-share-denied span{
		font-size: 18px;
  		margin-left: 5px;
  		margin-top: -2px;
	}
	.articles_btns{
		text-align:center;
	}
	.emojies{
		background: #f3f3f3;
		  width: 70px;
		  border-radius: 5px;
		  float:left;
		  text-align:center;
	}
	
	.shares_options{
		background: #f3f3f3;
		border-radius: 5px;
		width:calc(100% - 90px);
		margin-left:20px;
		float:right;
		text-align:center;
	}
	.shareimg{
		width:100%;
	}
	.show_details{
		cursor:pointer;
	}

</style>


      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
                  <div class="container-xxl flex-grow-1 container-p-y">
            
            <div class="d-flex justify-content-between">
    <h4 class="fw-bold py-3 mb-4">
          Manage Avatars
    </h4>
</div>

<!-- Category Model -->
<div class="modal fade" id="createnewscategoryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modal-title"><span class="modal-title-span">Add</span> Avatar</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">

                <div class="row">
                    
                    
                    
                    <div class="col-md-6">
                    
                    	<div class="" style="text-align:center;;margin-top:30px;">
                            <input name="file1" type="file" class="dropify" data-height="90" />
                        </div>
                    
                    	<div class="details"
                            <b>Avatar Details</b>
                            <div class="txt">Name and Task of Avatar</div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input class="form-control" name="avatar_name" placeholder="Type Avatar Name" />
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control" name="avatar_task" placeholder="Type Avatar Task" />
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                   
                    </div>
                </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>

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
    
       <div class="row">
       		<div class="col-sm-2">
            
            	@php
                	$count = 0;
                    $mainav = null;
                @endphp
               
            
            	@foreach ($avatars as $av)
                	
                    @php
                    	
                    	if($id == "0" && $count == 0){
                        	$mainav = $av;
                        }else if($id == $av->id){
                        	$mainav = $av;
                        }
                    @endphp
                    
                    <div class="show_details" cid="{{$av->id}}">
                    <div class="text-center ">
                    	@if($av->image != "")
                        	<img src="{{asset('/images/' . $av->image)}}" alt="" class="w-px-40 h-auto rounded-circle">
                        @else 
                        	<img src="https://www.w3schools.com/howto/img_avatar.png" alt="" class="w-px-40 h-auto rounded-circle">
                        @endif
                        </div>
                    
                    <div class="text-center">
                    	{{$av->name}}
                    </div>
                	
                    <div class="text-center">
                    	{{$av->task}}
                    </div>
                   </div> 
                    <hr />
                @endforeach
            </div>
            
            <!-- avatar list -->
            <div class="col-sm-4 ">
            	<div class="avatar_details">
            	<div class="row">
                	<div class="col-sm-7">
                    	<div class="heading av_name">{{$mainav->name}}</div>
                        <div class="details av_task">{{$mainav->task}}</div>
                        
                        <div class="heading">Join Date</div>
                        <div class="details av_join">{{ \Carbon\Carbon::parse($mainav->created_at)->format('d, m Y')}}</div>
                        
                        <div class="heading">Member Since</div>
                        <div class="details av_time">01 Year - 11 Months</div>
                    </div>
                    <div class="col-sm-5">
                    	@if($mainav->image != "")
                        	<img class="av_image" src="{{asset('/images/' . $mainav->image)}}" />
                        @else
                        	<img class="av_image" src="https://www.w3schools.com/howto/img_avatar.png" />
                        @endif
                    	
                    </div>
                </div>
                
                <hr class="dashhr" />
                
                <div class="row text-center feeds_div">
                	<div class="col-sm-4 feeds_container">
                    	<div class="feeds">
                        	<div class="heading">Feeds</div>
                        	<div class="details av_feeds">12k</div>
                        </div>
                    	
                    </div>
                    <div class="col-sm-4 feeds_container">
                    	<div class="feeds">
                    		<div class="heading">Like</div>
                        	<div class="details av_like">12k</div>
                        </div>
                    </div>
                    <div class="col-sm-4 feeds_container">
                    	<div class="feeds">
                    		<div class="heading">Follower</div>
                        	<div class="details av_follower">12k</div>
                       </div>
                    </div>
                </div>
                
                <hr class="dashhr" />
                
                <div class="row text-center folors">
                	<div class="col-sm-12">
                    	<img src="https://www.w3schools.com/howto/img_avatar.png" class="fol_img z-100" />
                        <img src="https://www.w3schools.com/howto/img_avatar.png" class="fol_img z-90" />
                        <img src="https://www.w3schools.com/howto/img_avatar.png" class="fol_img z-80" />
                        <img src="https://www.w3schools.com/howto/img_avatar.png" class="fol_img z-70" />
                        <img src="https://www.w3schools.com/howto/img_avatar.png" class="fol_img z-60" />
                        <img src="https://www.w3schools.com/howto/img_avatar.png" class="fol_img z-50" />
                        Followers
                    </div>
                </div>
                </div>
            </div>
            <!-- avatar list end -->
            
            <!-- post list -->
            <div class="col-sm-3 ">
            	<div class="avatar_details">
                	<div class="heading">
                    	Scheduled Feeds
                    </div>
                    <div class="details">
                    	Will be published soon
                    </div>
                    <hr class="postshr" />
                    
                    <div class="postbox">
                    
                        <div class="post-innter">
                            <img src="https://www.w3schools.com/howto/img_avatar.png" alt="" class="w-px-30 h-auto rounded-circle">
                            <div class="post_avatar">
                                <div class="heading_post av_name">Avatar Name</div>
                                <div class="details_post av_task">&nbsp;&nbsp;Avatar Task</div>
                            </div>
                            <div class="post_time">
                                Online in 05:12
                            </div>
                            <div class="post_img">
                                <img src="{{asset('/images/post.png')}}" />
                            </div>
                            
                            <div class="article_details">
                            
                            	<div class="artilce_title">
                                	Title of Article
                                </div>
                                <div class="article_time">
                                	22.05.2024 - 16:20
                                </div>
                                
                                <div class="article_txt">
                                	Some text will be where when user have 
                                </div>
                            
                            </div>
                            
                            <div class="col-sm-6 artilce_title articles_btns">
                            	<button class="btn btn-success btn-share btn-share-like">
                                <span>&#9745;</span>
                                Allow to Share
                                </button>
                            </div>
                            
                            <div class="col-sm-6 artilce_title">
                            	<button class="btn btn-danger btn-share btn-share-denied">Denied to Share <span>&#9746;</span></button>
                            </div>
                            
                            <div class="clear clearfix"></div>
                        </div>
                    </div>
                    <!-- post box end -->
                    
                    <div class="postbox">
                    
                        <div class="post-innter">
                            <img src="https://www.w3schools.com/howto/img_avatar.png" alt="" class="w-px-30 h-auto rounded-circle">
                            <div class="post_avatar">
                                <div class="heading_post av_name">Avatar Name</div>
                                <div class="details_post av_task">&nbsp;&nbsp;Avatar Task</div>
                            </div>
                            <div class="post_time">
                                Online in 05:12
                            </div>
                            <div class="post_img">
                                <img src="{{asset('/images/post.png')}}" />
                            </div>
                            
                            <div class="article_details">
                            
                            	<div class="artilce_title">
                                	Title of Article
                                </div>
                                <div class="article_time">
                                	22.05.2024 - 16:20
                                </div>
                                
                                <div class="article_txt">
                                	Some text will be where when user have 
                                </div>
                            
                            </div>
                            
                            <div class="col-sm-6 artilce_title articles_btns">
                            	<button class="btn btn-success btn-share btn-share-like">
                                <span>&#9745;</span>
                                Allow to Share
                                </button>
                            </div>
                            
                            <div class="col-sm-6 artilce_title">
                            	<button class="btn btn-danger btn-share btn-share-denied">Denied to Share <span>&#9746;</span></button>
                            </div>
                            
                            <div class="clear clearfix"></div>
                        </div>
                    </div>
                    <!-- post box end -->
                	
                </div>
            </div>
            
             <!-- post list -->
            <div class="col-sm-3 ">
            	<div class="avatar_details">
                	<div class="heading">
                    	Already Online
                    </div>
                    <div class="details">
                    	Is Already Online
                    </div>
                    <hr class="postshr" />
                    
                    <div class="postbox">
                    
                        <div class="post-innter">
                            <img src="https://www.w3schools.com/howto/img_avatar.png" alt="" class="w-px-30 h-auto rounded-circle">
                            <div class="post_avatar">
                                <div class="heading_post av_name">Avatar Name</div>
                                <div class="details_post av_task">&nbsp;&nbsp;Avatar Task</div>
                            </div>
                            <div class="post_time">
                                <i class="bx bx-trash me-1"></i>
                            </div>
                            <div class="post_img">
                                <img src="{{asset('/images/post.png')}}" />
                            </div>
                            
                            <div class="article_details">
                            
                            	<div class="artilce_title">
                                	Title of Article
                                </div>
                                <div class="article_time">
                                	22.05.2024 - 16:20
                                </div>
                                
                                <div class="article_txt">
                                	Some text will be where when user have 
                                </div>
                            
                            </div>
                            
                            <div class="col-sm-12 ">
                            	<div class="emojies">
                                	&#128512;&#128515;&#128516;
                                </div>
                            	<div class="shares_options">
                                	<img class="shareimg" src="{{asset('/images/share.png')}}" />
                                </div>
                            </div>
                            
                            <div class="clear clearfix"></div>
                        </div>
                    </div>
                    <!-- post box end -->
                    
                    <div class="postbox">
                    
                        <div class="post-innter">
                            <img src="https://www.w3schools.com/howto/img_avatar.png" alt="" class="w-px-30 h-auto rounded-circle">
                            <div class="post_avatar">
                                <div class="heading_post av_name">Avatar Name</div>
                                <div class="details_post av_task">&nbsp;&nbsp;Avatar Task</div>
                            </div>
                            <div class="post_time">
                                <i class="bx bx-trash me-1"></i>
                            </div>
                            <div class="post_img">
                                <img src="{{asset('/images/post.png')}}" />
                            </div>
                            
                            <div class="article_details">
                            
                            	<div class="artilce_title">
                                	Title of Article
                                </div>
                                <div class="article_time">
                                	22.05.2024 - 16:20
                                </div>
                                
                                <div class="article_txt">
                                	Some text will be where when user have 
                                </div>
                            
                            </div>
                            
                            <div class="col-sm-12 ">
                            	<div class="emojies">
                                	&#128512;&#128515;&#128516;
                                </div>
                            	<div class="shares_options">
                                	<img class="shareimg" src="{{asset('/images/share.png')}}" />
                                </div>
                            </div>
                            
                            <div class="clear clearfix"></div>
                        </div>
                    </div>
                    <!-- post box end -->
                	
                </div>
            </div>
                
            <!-- post list end -->
       
       </div>  
            
    
  </div>
  <!--/ Basic Bootstrap Table -->


            <!-- pricingModal -->
                        <!--/ pricingModal -->

          </div>
          <!-- / Content -->

        
          <div class="content-backdrop fade"></div>
        </div>
        <!--/ Content wrapper -->
      @include('avatars/footer')
      
	<script>
		var url = "{{url('/get-avatars/')}}";
		var imgurl = "{{asset('')}}";
		
		
		$(document).on("click", ".show_details", function(){
			var cid = $(this).attr("cid");
			var apiurl = url + "/" + cid;
				$.ajax({
				  url: apiurl,
				  cache: false,
				  success: function(r){
					  var result = JSON.parse(r);
					  $(".av_name").text(result.name);
					  $(".av_task").text(result.task);
					  $(".av_join").text(result.joindate);
					  if(result.image != ""){
						  var imgpath = imgurl + "/images/" + result.image;
					  }else{
						  var imgpath = "https://www.w3schools.com/howto/img_avatar.png";
					  }
					  $(".av_image").attr("src", imgpath);
					  $(".av_time").text(result.days);
				  }
				});
		});
	
	</script>