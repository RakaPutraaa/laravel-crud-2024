<!-- Modal Logout -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <p>Are you sure you want to logout?</p>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary">Logout</button>
    </form>
    </div>
  </div>
</div>
</div>

</div>
</div>
</div>

<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>



<script src="{{ asset('assets/ruang-admin') }}/vendor/jquery/jquery.min.js"></script>
<script src="{{ asset('assets/ruang-admin') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/ruang-admin') }}/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="{{ asset('assets/ruang-admin') }}/js/ruang-admin.min.js"></script>
<script src="{{ asset('assets/ruang-admin') }}/vendor/chart.js/Chart.min.js"></script>
<script src="{{ asset('assets/ruang-admin') }}/js/demo/chart-area-demo.js"></script>

<script src="{{ asset('assets/ruang-admin') }}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('assets/ruang-admin') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

    $(document).ready(function() {
        $('#summernote').summernote();
    });


    @if (session('success'))
        Swal.fire({
            title: "Good job!",
            text: '{{ session('success') }}',
            icon: "success"
        });
    @endif
    @if (session('error'))
        Swal.fire({
            title: "Good job!",
            text: '{{ session('error') }}',
            icon: "error"
        });
    @endif

    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
</script>
</body>
</html>
