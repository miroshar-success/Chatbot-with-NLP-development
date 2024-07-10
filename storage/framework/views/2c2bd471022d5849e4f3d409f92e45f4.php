<?php echo $__env->make('avatars/head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<style>	
	.details{
		background: #f3f3f3;
	  	padding: 5px;
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
		float:left;
		margin-right:10px;
	}
	.ava-link{
		color:unset;
	}

</style>


      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
                  <div class="container-xxl flex-grow-1 container-p-y">
            
            <div class="d-flex justify-content-between">
    <h4 class="fw-bold py-3 mb-4">
          Avatars
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
            <?php echo csrf_field(); ?>
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

<?php if($message = Session::get('success')): ?>
					<div class="alert alert-success alert-message">
						<i class="fa fa-check-circle"></i>
						<?php echo e($message); ?>

					</div>
				<?php endif; ?>

<!-- Basic Bootstrap Table -->
<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="m-0">Avatars List</h5>
                <a class="btn btn-primary" href="avatars/create"><i class="bx bx-plus me-0 me-sm-1"></i> Add Avatar</a>
            </div>
            
            
            
            
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Avatar Name</th>
            <th>Total Post</th>
            <th>Total Follower</th>
            <th>Post Duration</th>
            <th>Status</th>
            <th>Options</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
        
        	
            <?php $__currentLoopData = $avatars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $av): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            	<tr>
                	<td class="upper">
                    	<a class="ava-link" href="<?php echo e(url('/manage-avatars/' . $av->id)); ?>">
                    		<?php echo e($av->av_Id); ?>

                        </a>
                    </td>
                    <td>
                    <a class="ava-link" href="<?php echo e(url('/manage-avatars/' . $av->id)); ?>">
                    	<div class="w-px-40 text-rigth" >
                    	<?php if($av->image != ""): ?>
                        	<img src="<?php echo e(asset('/images/' . $av->image)); ?>" alt="" class="w-px-40 h-auto rounded-circle">
                        <?php else: ?> 
                        	<img src="https://www.w3schools.com/howto/img_avatar.png" alt="" class="w-px-40 h-auto rounded-circle">
                        <?php endif; ?>
                        </div>
                        
                               
                    	&nbsp;<span><?php echo e($av->name); ?><br /><?php echo e($av->task); ?></span>
                        
                        </a>
                    </td>
                    <td>1028</td>
                    <td>1.02k</td>
                    <td><?php echo e($av->working_days); ?></td>
                    <td>
                    	<?php if($av->status == 1): ?>
                        	<label class="switch me-0">
							  <input type="checkbox" class="switch-input" checked="">
							  <span class="switch-toggle-slider">
								
							  </span>
							  <span class="switch-label"></span>
							</label>
                        <?php else: ?>
                        	<label class="switch me">
							  <input type="checkbox" class="switch-input">
							  <span class="switch-toggle-slider">
								
							  </span>
							  <span class="switch-label"></span>
							</label>
                        <?php endif; ?>
                    </td>
                    <td>
                    	<a class="btn" href="avatars/<?php echo e($av->id); ?>/edit" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit"><i class="bx bx-edit"></i></a>
                        
                        
                        
                         <form action="avatars/<?php echo e($av->id); ?>" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                                <?php echo method_field('DELETE'); ?>
                                <?php echo csrf_field(); ?>                                <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove">
                                	<i class="bx bx-trash me-1"></i>
                                </button>
                            </form>
                        
                        
                    </td>
                
                </tr>
           
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
                
            
                </tbody>
      </table>
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
      <?php echo $__env->make('avatars/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      
	<?php /**PATH E:\code\mongodb\my-app\resources\views/avatars_list.blade.php ENDPATH**/ ?>