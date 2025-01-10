<style>
  .modal-header, h4, .close {
        background-color: #9C27B0;
        color:white !important;
        text-align: center;
        font-size: 30px;
  }

  .btn-color {
        background-color: #9C27B0;
        color:white;
        font-size: 16px;
        font-weight: bold;
  }

  .modal-body {
        text-align: left;

  }
  .modal-footer {
        background-color: #E1BEE7;
  }
</style>

<div class="modal fade" id="myModalsignupin" role="dialog">

  <div class="modal-dialog">

    <form method="POST" enctype="multipart/form-data" action="signup1.php">
      
      <div class="modal-content">
        
        <div class="modal-header" style="padding:30px 40px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4>Signup</h4>
        </div>
        
        <div class="modal-body" style="padding:40px 50px;">
        
      <form role="form">       
        
        <div class="form-group">
          <label for="usrname"> Name</label>
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6">
              <input type="text" autofocus required pattern="^[A-Za-z]+" title="Please Enter A-Z and a-z" class="form-control" name="fn" placeholder="First Name" />
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
              <input type="text" required pattern="^[A-Za-z]+" title="Please Enter A-Z and a-z" class="form-control" name="ln" placeholder="Last Name" />
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="usrname"> User Name</label>
          <input type="email" class="form-control" id="usrname" name="mail" placeholder="Enter a Username" />
        </div>

        <div class="form-group">
          <label for="psw"> Password</label>
          <input type="password" required pattern="^[A-Za-z0-9]+" title="Please Enter A-Z and a-z and 0-9" class="form-control" id="psw" name="pass" placeholder="Enter a Password" />
        </div>
            
        <div class="form-group">
          <label for="Phone">Phone</label>
          <input type="number" size="10" required pattern="^[0-9]+" title="Please Enter from 0 to 9" class="form-control" name="ph" placeholder="Enter Phone" />
        </div>

        <div class="form-group">
          <label for="File" >Upload Image</label>
          <input type="file"  required class="form-control" name="img" />
        </div>
        
        <button type="submit" class="btn btn-color btn-block"><span class="glyphicon glyphicon-off"></span> Signup</button>

      </form>
    </div>
    
        <div class="modal-footer">
            
          <button type="submit" class="btn btn-danger btn-sm btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p><b>Already a Member? Login</b></p>

        </div>
    </form>
  </div>    
</form>

</div>
</div>

<script>
$(document).ready(function(){
    $("#myBtnsignupin").click(function(){
        $("#myModalsignupin").modal();
    });
});
</script>