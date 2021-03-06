<?php
/*
 * @group 14 cmt322
 */
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/starter-template/">
    <title>Admin Panel | Review</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/admin-A.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
    <script src="https://kit.fontawesome.com/905fa9dabf.js" crossorigin="anonymous"></script>

  </head>

  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="mainPage-F.php">Rescue</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="adminDashboard-A.html">Dashboard</a></li>
            <li><a href="adminAddEvent-B.html">Event</a></li>
            <li><a href="adminManageReport-A.html">Report</a></li>
            <li class="active"><a href="adminReviewReport-A.html">Review</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome, Zhan Sung</a></li>
            <li><a href="mainPage-F.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              Review <small>Manage Victim Report</small></h1>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="adminDashboard-A.html">Dashboard</a></li>  
          <li class="active">Review</li>
        </ol>
      </div>
    </section>
    <!-------------------------------------------------------------Profile----------------------------------------------------->
    <section id="main">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="panel panel-default">
                      <div class="panel-heading main-color-bg">
                          Admin's Profile
                      </div>
                      <div class="panel-body">
                          <div class="container">
                              <div class="row">
                                  <div class="col-md-3" >
                                      <img src="css/image-B/user1.jpg" id="profile-pic">
                                  </div>
                                  <div class="col-md-8">
                                      <div id="profile">
                                          <table class="table table-striped">
                                              <tr>
                                                  <th>Name</th>
                                                  <th>:</th>
                                                  <td>Wong Zhan Sung</td>
                                              </tr>
                                              <tr>
                                                  <th>Admin ID</th>
                                                  <th>:</th>
                                                  <td>AE451000202</td>
                                              </tr>
                                              <tr>
                                                  <th>Contact No.</th>
                                                  <th>:</th>
                                                  <td>012-9334712</td>
                                              </tr>
                                              <tr>
                                                  <th>Email</th>
                                                  <th>:</th>
                                                  <td>wongzng@gmail.com</td>
                                              </tr>
                                              <tr style="overflow: hidden;">
                                                  <th>Address</th>
                                                  <th>:</th>
                                                  <td> 96, Lorong Hang Tuah 8/37, SS6, 86522 Gelang Patah, Johor</td>
                                              </tr>
                                              <tr>
                                                  <th>Status &nbsp &nbsp</th>
                                                  <th>:&nbsp &nbsp</th>
                                                  <td>Staff</td>
                                              </tr>
                                          </table>
                                      </div>
                                  </div>
                              </div>
                          </div> 
                      </div>
                    </div>
              </div>
          </div>
      </div>
  </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="adminDashboard-A.html" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="adminAddEvent-B.html" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Add Event<span class="badge">12</span></a>
              <a href="adminManageReport-A.html" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Report<span class="badge">12</span></a>
              <a href="adminReviewReport-A.html" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Review<span class="badge">6</span></a>
            </div>

            <div class="well">
              <h4>Answered</h4>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                  50%
                </div>
              </div>
              <h4>Pending</h4>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                  50%
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Review</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <input class="form-control" type="text" placeholder="Find Report...">
                    </div>
                </div>  
                <table class="table table-striped table-hover">
                    <tr>
                      <th>Report ID</th>
                      <th>Date received</th>
                      <th>Name</th>
                      <th>Status</th>
                      <th></th>
                    </tr>
                    <tr>
                      <td>R003</td>
                      <td>12-12-2020</td>
                      <td>Amanda Amani</td>
                      <td>Pending</td>
                      <td><button type="button" class="btn btn-primary main-color-bg" data-toggle="modal" data-target="#replyReport"
                        >Reply</button></td>

                    </tr>
                    <tr>
                      <td>R004</td>
                      <td>12-12-2020</td>
                      <td>Che Jamilah</td>
                      <td>Pending</td>
                      <td><button type="button" class="btn btn-primary main-color-bg" data-toggle="modal" data-target="#replyReport"
                        >Reply</button></td>
                    </tr>
                </table>
                <nav aria-label="...">
                    <ul class="pagination">
                      <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                      <li class="active"><a href="#" class="main-color-bg">1 <span class="sr-only">(current)</span></a></li>
                      ...
                    </ul>
                </nav>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>


    <!-- Reply report-->
    <div class="modal fade" id="replyReport" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form onsubmit="mySubmit3()" method="POST" action="review.php">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Review Report</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Admin Name</label>
                        <input type="text" name="rev_name" class="form-control" placeholder="Fullname">
                    </div>
                    <div class="form-group">
                        <label>Reply</label>
                        <textarea name="rev_reply" class="form-control" placeholder="Write your reply here"></textarea>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Published
                        </label>
                    </div>
                    
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary main-color-bg">Send Reply</button>
                </div>
            </form>
          </div>
        </div>
    </div>

    <footer class="white-section" id="footer">
      <div class="container-fluid">
        <i class="social-icon fab fa-facebook-f"></i>
        <i class="social-icon fab fa-twitter"></i>
        <i class="social-icon fab fa-instagram"></i>
        <i class="social-icon fas fa-envelope"></i>
        <p>© Copyright 2020 Rescue</p>
      </div>
    </footer> 
   
    <script>
        CKEDITOR.replace('rev_reply');
    </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
