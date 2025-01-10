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

  .modal-content{
        background-color: #F3E5F5;
  }

  .modal-body {
        text-align: left;
  }

  .modal-footer {
        background-color: #E1BEE7;
  }
</style>

<div class="modal fade" id="myModalloginin" role="dialog">
    <div class="modal-dialog" >
        <form method="POST" action="login1.php">
          <div class="modal-content" >
            
            <div class="modal-header" style="padding:30px 40px;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
            </div>
        
            <div class="modal-body" style="padding:40px 50px;">
          
            <form role="form" text-align="left">

              <div class="form-group">
                <label for="usrname"><span class="glyphicon glyphicon-user"></span> User Name</label>
                <input type="email" autofocus class="form-control" id="usrname" name="mail" placeholder="Enter Email" />
              </div>

              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                <input type="password" class="form-control" id="psw" name="pass" placeholder="Enter Password" />
              </div>

              <div class="checkbox">
                <label><input type="checkbox" value="" checked>Remember me</label>
              </div>

              <button type="submit" class="btn btn-color btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>

            </form>
          </div>
        
          <div class="modal-footer">
            
            <button type="submit" class="btn btn-danger btn-sm btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
            <p><b>Not a Member? Signup</b></p>

          </div>
        </form>
    </div>    
  </div>
</div>

<script>
$(document).ready(function(){
    $("#myBtnloginin").click(function(){
        $("#myModalloginin").modal();
    });
});
</script>