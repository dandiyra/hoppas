<section>
	<div class="container my-auto">
		<div class="row">
			<div class="col-md-12">
				<div class="copyright text-center">
					<span>Copyright © Spectrum Cahaya Nusantara. All rights reserved. Template by <a>Dandy
							Yudistira</a>.</span>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END PAGE CONTAINER-->
</div>
</div>

<!-- Jquery JS-->
<script src="<?= base_url('assets/admin/'); ?>vendor/jquery-3.2.1.min.js"></script>

<!-- Bootstrap JS-->
<script src="<?= base_url('assets/admin/'); ?>vendor/bootstrap-4.1/popper.min.js"></script>
<script src="<?= base_url('assets/admin/'); ?>vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="<?= base_url('assets/admin/'); ?>vendor/slick/slick.min.js"></script>
<script src="<?= base_url('assets/admin/'); ?>vendor/wow/wow.min.js"></script>
<script src="<?= base_url('assets/admin/'); ?>vendor/animsition/animsition.min.js"></script>
<script src="<?= base_url('assets/admin/'); ?>vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<script src="<?= base_url('assets/admin/'); ?>vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="<?= base_url('assets/admin/'); ?>vendor/counter-up/jquery.counterup.min.js"></script>
<script src="<?= base_url('assets/admin/'); ?>vendor/circle-progress/circle-progress.min.js"></script>
<script src="<?= base_url('assets/admin/'); ?>vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="<?= base_url('assets/admin/'); ?>vendor/chartjs/Chart.bundle.min.js"></script>
<script src="<?= base_url('assets/admin/'); ?>vendor/select2/select2.min.js"></script>
<script src="<?= base_url('assets/admin/'); ?>lib/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url('assets/admin/'); ?>lib/datatables-responsive/dataTables.responsive.js"></script>
<script src="<?= base_url('assets/admin/'); ?>lib/select2/js/select2.min.js"></script>
<script src="<?= base_url('assets/admin/'); ?>vendor/vector-map/jquery.vmap.js"></script>
<script src="<?= base_url('assets/admin/'); ?>vendor/vector-map/jquery.vmap.min.js"></script>
<script src="<?= base_url('assets/admin/'); ?>vendor/vector-map/jquery.vmap.sampledata.js"></script>
<script src="<?= base_url('assets/admin/'); ?>vendor/vector-map/jquery.vmap.world.js"></script>
<script src="<?= base_url('assets/admin/'); ?>vendor/sweetalert/sweetalert.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js">
</script>

<!-- Main JS-->
<script src="<?= base_url('assets/admin/'); ?>js/main.js"></script>
<script src="<?= base_url('assets/admin/'); ?>js/starlight.js"></script>


<script>
	$('.custom-file-input').on('change', function () {
		let filename = $(this).val().split('\\').pop();
		$(this).next('.custom-file-label').addClass("selected").html(filename);
	});
	$('.form-check-input').on('click', function () {
		const menuId = $(this).data('menu');
		const roleId = $(this).data('role');
		$.ajax({
			url: "<?= base_url('admin/changeaccess'); ?>",
			type: 'post',
			data: {
				menuId: menuId,
				roleId: roleId
			},
			success: function () {
				document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
			}
		});
	});

</script>

<!-- Data Tables -->
<script>
	$(function () {
		'use strict';

		$('#datatable1').DataTable({
			responsive: true,
			language: {
				searchPlaceholder: 'Search...',
				sSearch: '',
				lengthMenu: '_MENU_ items/page',
			}
		});
		$('#datatable2').DataTable({
			bLengthChange: false,
			searching: false,
			responsive: true
		});
		// Select2
		$('.dataTables_length select').select2({
			minimumResultsForSearch: Infinity
		});
	});

</script>
<!-- Sweetalert -->
<script>
	$(document).on("click", "#delete", function (e) {
		e.preventDefault();
		var link = $(this).attr("href");
		swal({
				title: "Are you Want to delete?",
				text: "Once Delete, This will be Permanently Delete!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if (willDelete) {
					window.location.href = link;
				} else {
					swal("Delete Cancel!");
				}
			});
	});

</script>
<script>
	$(document).ready(function () {
		$('#division').change(function () {
			var id = $(this).val();
			$.ajax({
				url: "<?= base_url(); ?>/Admin/getSubDivision",
				method: "POST",
				dataType: "JSON",
				data: {
					id: id
				},
				success: function (array) {
					var html = '';
					for (let index = 0; index < array.length; index++) {
						html += "<option>" + array[register].subDivision + "</option>"

					}
					$('#subdivision').html(html);
				}
			})
		})
	})

</script>

<script>
$(document).ready(function() {

    $('#division').change(function() {
        var value = $(this).val();
        $.ajax({
            url: "<?php echo site_url('FormReq/GetStaff');?>",
            method: "POST",
            data: {
                division: value
            },
            async: true,
            dataType: 'json',
            success: function(data) {
                var html = '';
                var i;
                html += '<option value="">-- Please select staff --</option>';
                for (i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].email + '>' + data[i]
                        .name + '</option>';
                }
                $('#nameRequester').html(html);

            }
        });
        return false;
    });

});
 </script>

<script type="text/javascript">
        $(document).ready(function(){
 
            $('#division').change(function(){ 
                var id=$(this).val();
                $.ajax({
                    url : "<?php echo site_url('M_div/get_subdivision');?>",
                    method : "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                         
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<option value='+data[i].id_sdiv+'>'+data[i].subDivision+'</option>';
                        }
                        $('#subdivision').html(html);
                    }
                });
                return false;
            }); 
        });
    </script>
</body>
</html>
<!-- end document-->
