{{-- <div class="example">
  <div class="example-well h-350">
    <img class="center" src="../../assets/examples/images/modal/form-modal.png" alt="...">
  </div>
  <p>This modals including title, input for each field. </p>
  <button class="btn btn-primary" data-target="#exampleFormModal" data-toggle="modal"
    type="button">Generate</button> --}}

  <!-- Modal -->
  <div class="modal fade" id="exampleFormModal" aria-hidden="false" aria-labelledby="exampleFormModalLabel"
    role="dialog" tabindex="-1">
    <div class="modal-dialog modal-simple">
      <form class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
          <h4 class="modal-title" id="exampleFormModalLabel">Set The Messages {{ $parent_account }}</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-xl-4 form-group">
              <input type="text" class="form-control" name="firstName" placeholder="First Name">
            </div>
            <div class="col-xl-4 form-group">
              <input type="email" class="form-control" name="lastName" placeholder="Last Name">
            </div>
            <div class="col-xl-4 form-group">
              <input type="email" class="form-control" name="email" placeholder="Your Email">
            </div>
            <div class="col-xl-12 form-group">
              <textarea class="form-control" rows="5" placeholder="Type your message"></textarea>
            </div>
            <div class="col-md-12 float-right">
              <button class="btn btn-primary btn-outline" data-dismiss="modal" type="button">Add Comment</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- End Modal -->
{{-- </div> --}}
