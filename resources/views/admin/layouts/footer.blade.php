
<!-- /.content-wrapper -->
<footer class="text-center main-footer">
  <div class="pull-left hidden-xs">
  </div>
  {{-- <strong>Copyleft &copy; 2021<a href="">  </a>.</strong>  --}}
</footer>


  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script type="text/javascript" src="{{ URL::asset('/admin_style/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>

<!-- Select2 -->
<script type="text/javascript" src="{{ URL::asset('/admin_style/plugins/select2/select2.full.min.js') }}"></script>


<script type="text/javascript" src="{{ URL::asset('/admin_style//ckeditor/ckeditor.js') }}"></script>

<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script type="text/javascript" src="{{ URL::asset('/admin_style/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script type="text/javascript" src="{{ URL::asset('/admin_style/plugins/morris/morris.min.js') }}"></script>

<!-- Sparkline -->
<script type="text/javascript" src="{{ URL::asset('/admin_style/plugins/sparkline/jquery.sparkline.min.js') }}"></script>

<!-- jvectormap -->
<script type="text/javascript" src="{{ URL::asset('/admin_style/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('/admin_style/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

<!-- jQuery Knob Chart -->
<script type="text/javascript" src="{{ URL::asset('/admin_style/plugins/knob/jquery.knob.js') }}"></script>

<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('/admin_style/plugins/daterangepicker/daterangepicker.js') }}"></script>

<!-- datepicker -->
<script type="text/javascript" src="{{ URL::asset('/admin_style/plugins/datepicker/bootstrap-datepicker.js') }}"></script>

<!-- Bootstrap WYSIHTML5 -->
<script src=""></script>
<script type="text/javascript" src="{{ URL::asset('/admin_style/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>

<!-- Slimscroll -->
<script src=""></script>

<script type="text/javascript" src="{{ URL::asset('/admin_style/plugins/checkbox/js/jquery.vswitch.min.js') }}"></script>


<script type="text/javascript" src="{{ URL::asset('/admin_style/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>


<script type="text/javascript" src="{{ URL::asset('/admin_style/plugins/tagsinput/jquery.tagsinput.min.js') }}"></script>

<!-- FastClick -->
<script type="text/javascript" src="{{ URL::asset('/admin_style/plugins/fastclick/fastclick.js') }}"></script>

<!-- AdminLTE App -->
<script type="text/javascript" src="{{ URL::asset('/admin_style/dist/js/app.min.js') }}"></script>



<!-- Sweet Alert -->
<script type="text/javascript" src="{{ URL::asset('/cus/alert/sweetalert.min.js') }}"></script>


@include('admin.layouts.alert')






        <!-- make slug  -->
        <script type="text/javascript">

          function getUrlSlug ($title) {
            var v = $title ;
            $.ajax({
              type: 'get',
              url: "{{ url('admin/home/clearurl') }}",
              data: { id:v },
              beforeSend: function(){
                $('#slug').val('...');
              },
              success: function (data) {

                $('#slug').val(data);

              }
            });

          }
        </script>

        <!-- datatable  -->
        <script type="text/javascript" src="{{ URL::asset('/admin_style/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('/admin_style/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>


        <script>
          $(function () {

            $('#example1').DataTable({
              "paging": true,
              "lengthChange": true,
              "searching": true,
              "ordering": true,
              "info": true,
              "autoWidth": true
            });
          });
        </script>

        <!-- Show image before upload -->
        <script type="text/javascript">

          $("#fileUpload").on('change', function () {

            if (typeof (FileReader) != "undefined") {

              var image_holder = $("#image-holder");
              image_holder.empty();

              var reader = new FileReader();


              reader.onload = function (e) {
                $("<img />", {
                  "src": e.target.result,
                  "class": "thumb-image",
                  "style":'max-width: 200px ;max-height: 200px'
                }).appendTo(image_holder);

              }
              image_holder.show();
              reader.readAsDataURL($(this)[0].files[0]);
            } else {
              alert("This browser does not support FileReader.");
            }
          });

        </script>


        <script type="text/javascript">

          $("#icon_name").on('keyup', function () {
            var icon = $("#icon_name").val();
            $('#icon').attr('class','fa '+icon);
          });

        </script>
        <script>
          $('#tags').tagsInput();
        </script>

        <script>
          function show(element) {
            document.getElementById("img01").src = element.src;
            document.getElementById("modal01").style.display = "block";
          }
        </script>



        <script type="text/javascript" src="{{ URL::asset('/admin_style/plugins/ckeditor/ckeditor.js') }}"></script>

        <script>
          //this is append another body for services
          var body_increament= 1;
          $(document).ready(function() {
           $('#add_body').click(function ()
           {


           var body_content   = '<div id="body' + body_increament + '">'+
             ' <div class="form-group col-md-6 ">'+
                                '<label for="body_ar">{{trans('admin.body_ar')}}</label>'+
                               '<textarea name="body_ar['+ body_increament +'] class="form-control"></textarea>'+
             '</div>'+

             '<div class="form-group col-md-9 ">'+
                         '<label for="body_en">{{trans('admin.body_en')}}</label>'+
                        '<textarea name="body_en['+ body_increament +'] class="form-control"></textarea>'+
             '</div>'+

               '   <div class="col-sm-12 col-md-4">\n' +
               '     <button type="button" onclick="removeRow(' + body_increament + ')" class="btn btn-danger btn-sm float-right">\n' +
               '         Remove Body\n' +
               '     </button>\n' +
               '   </div>' +
            '</div>';

               //$("form").find("#add_another_country").append(state_content);
           $('#add_another_body').append(body_content);
           body_increament++;


           });
                 });

          function removeRow(row) {
              let bodyId = 'body' + row;
              let bodyDiv = document.getElementById(bodyId);
              return bodyDiv.parentNode.removeChild(bodyDiv);
          }
           </script>




        @yield('scripts')
        @yield('script')

        <script>


       </script>
      </body>
      </html>
