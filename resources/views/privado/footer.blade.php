

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

 

  
    <!-- datatables JS -->
    <script type="text/javascript" src="{{asset('vendor/datatables/datatables.min.js')}}"></script>    
    <!-- código propio JS --> 
    <script type="text/javascript" src="{{asset('main.js')}}"></script>  
    <script>

    $(document).ready(function (e){
      $('#imagen').change(function(){
        let reader = new FileReader();
        reader.onload = (e)=>{
          $('#imagenSeleccionada').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
      });
    });
</script>
</body>

</html>
</body>
</html>
