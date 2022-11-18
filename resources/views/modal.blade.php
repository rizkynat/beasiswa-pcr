
    @if(\Session::has('success'))
    <script text="text/javascript">
      $(window).on('load' ,function() {
        $('#myModal').modal('show')
      });
    </script>
    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
      <div class="modal-dialog modal-confirm">
        <div class="modal-content">
          <div class="modal-header">
            <div class="icon-box">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
              <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
            </svg>
            </div>				
            <h4 class="modal-title w-100">Selamat</h4>	
          </div>
          <div class="modal-body">
            <p class="text-center">{{Session::get('success')}}</p>
          </div>
          <div class="modal-footer">
            <button class="btn btn-success btn-block" data-dismiss="modal">OK</button>
          </div>
        </div>
      </div>
    </div>
    @endif
    @if(\Session::has('failed'))
    <script text="text/javascript">
      $(window).on('load' ,function() {
        $('#myModal').modal('show')
      });
    </script>
    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
      <div class="modal-dialog modal-confirm">
        <div class="modal-content">
          <div class="modal-header">
            <div class="icon-box" style="background:#ef513a;">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
              <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg>
            </div>				
            <h4 class="modal-title w-100">Perhatian</h4>	
          </div>
          <div class="modal-body">
            <p class="text-center">{{Session::get('failed')}}</p>
          </div>
          <div class="modal-footer">
            <button class="btn btn-success btn-block" style="background:#ef513a;" data-dismiss="modal">OK</button>
          </div>
        </div>
      </div>
    </div>
    @endif