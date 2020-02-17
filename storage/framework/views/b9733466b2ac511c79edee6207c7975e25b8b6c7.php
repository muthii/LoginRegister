<?php $__env->startSection('content'); ?>
</head>
      <body>
         <div class="container">
               <h2>Laravel DataTable - Tuts Make</h2>
            <table class="table table-bordered" id="laravel_datatable">
               <thead>
                  <tr>
                     <th>Id</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Created at</th>
                  </tr>
               </thead>
            </table>
         </div>
   <script>
   $(document).ready( function () {
    $('#laravel_datatable').DataTable({
           processing: true,
           serverSide: true,
           ajax: "<?php echo e(url('users-list')); ?>",
           columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    { data: 'created_at', name: 'created_at' }
                 ]
        });
     });
  </script>
   </body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/muthii/LoginRegister/resources/views/users.blade.php ENDPATH**/ ?>