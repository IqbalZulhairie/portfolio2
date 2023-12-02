<?php include 'header.php' ?> 
<form onsubmit="return send()" class="shadow m-5 p-4 bg-white position-relative">
    <h4>Contact Me</h4>
    
    
    <div class="row m-3">
        <div class="col m-2 p-3 rounded" style="background-color: #F5F9BF;">
            <h4>Comment</h4><br>
            <textarea id="comment" class="form-control" placeholder="leave your comment here" style="height: 70%;"></textarea>
        </div>
        
        <div class="col " >
            <div class="row m-2 p-3 rounded" style="background-color: #F5F9BF;">
                <label>Phone Number</label>
                <input id="fon" type="number" class="form-control">
            </div><br>
            <div class="row m-2 p-3 rounded" style="background-color: #F5F9BF;">
                <label>Email</label>
                <input id="email" type="text" class="form-control">
            </div>
            
        </div>
        
    </div><br>
    
    <div class="text-center">
        <input type="submit" class="btn btn-primary btn-sm" value="Send Message">
        <label id="success_msg"></label>
    </div>
</form>

<script>
    function send()
    {
        var x = document.getElementById("comment").value;
        var y = document.getElementById("fon").value;
        var z = document.getElementById("email").value;
        var successMsg = document.getElementById("success_msg");
        
        if (x === "" || y === "" || z === "" || x === null || y === null || z === null) {
          alert("Please Fill In The Blank");
          return false;
      }
      else
      {
          alert("The Message Successfully Send");
      }
    }
</script>

<?php include 'footer.php' ?> 