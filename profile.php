<?php include 'connection.php';?>
<?php include 'sidebar.php';?>
<script src="ckeditor/ckeditor.js" type="text/javascript"></script>
<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
                    <div class="col-lg-8">
                        <h1 class="page-header">Profile</h1>
                        </div>

                        <div class="col-lg-4">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <label>Upload featured image</label>
                            </div>
                            <div class="panel-body">
                                <input type="file">
                                <input type="submit" value="Upload">
                            </div>
                        </div>
                       
                                </div>
                        <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i>write about your portfolio</li>
                        </ol>
                    </div>
                
                    
                <div class="col-lg-6 ">

                      <form role="form">
                          <div class="form-group">
                                <label>Heading</label>
                                <input class="form-control" placeholder="Enter Heading">
                                <label>Title</label>
                                <input class="form-control" placeholder="enter title">
                                </div>
                                </form>
                                </div>
                                    <div class="col-lg-4">
                        <div class="form-group">
                                <label>Upload Profile image</label>
                                <input type="file">

                            </div>
          
                    <input type="submit" value="Upload">
                    
                </div>
                            
                <div class="col-lg-10">

                        <form action="" method="post">
                <label>Write Short Description</label>
            <textarea class="ckeditor" name="editor"></textarea>
            <input type="submit" value="Insert">
            <input type="submit" value="Reset">
            <input type="submit" value="Update">
        </form>
                    
                    </div> 

                    <br>
                    <br>
                    <div class="col-lg-12">
                        <h4>write more ............</h4>
                    </div>
                    <div class="col-lg-6 ">

                      <form role="form">
                          <div class="form-group">
                                <label>Heading</label>
                                <input class="form-control" placeholder="What can i do..">
                                <label>Title</label>
                                <input class="form-control" placeholder="enter title">
                                </div>
                                </form>
                                </div>
                                                    <div class="col-lg-10">

                        <form action="" method="post">
                <label>Write Short Description</label>
            <textarea class="ckeditor" name="editor"></textarea>
            <input type="submit" value="Insert">
            <input type="submit" value="Reset">
            <input type="submit" value="Update">
        </form>
                    
                    </div> 
                    <div class="col-lg-2 ">
                      <form role="form">
                          <div class="form-group">
                                <label>Projects done</label>
                                <input class="form-control" placeholder="number">
                                
                                </div>
                                </form>
                                </div>
                                      <div class="col-lg-2 ">
                      <form role="form">
                          <div class="form-group">
                                <label>Happy clients</label>
                                <input class="form-control" placeholder="number">
                                
                                </div>
                                </form>
                                </div>
                              <div class="col-lg-2 ">
                      <form role="form">
                          <div class="form-group">
                                <label>Coffes cups</label>
                                <input class="form-control" placeholder="number">
                                
                                </div>
                                </form>
                                </div>

      </div>
   

                         
     </div>
     <center>
     <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="Reset" class="btn btn-warning">Reset</button>
                            <button type="submit" class="btn btn-success">Update</button>
       </center>                     
  </div>
  </body>
</html>
<?php include 'editor.php';?>
