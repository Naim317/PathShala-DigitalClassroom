<?php
$conn = mysqli_connect("localhost","root","","pathshaladb");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="icon" href="images/favicon_f.ico">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link rel="stylesheet" href="css/webDashboard.css">

</head>

<body>
  <nav class="navbar navbar-inverse fixed-top mb-5">
    <div class="container-fluid">
      <div class="navbar-header">

        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        
        <div id="mySidepanel" class="sidepanel" windows.load=>

          <a href="javascript:void(0)" class="closebtn"  onclick="closeNav()">&times;</a>
          <a href="#" onclick="closeNav()" id="dashSB">Dashboard</a>
          <a href="#" onclick="closeNav()" id="manageSB">Manage</a>
          <a href="webHome.php" target="_blank" onclick="closeNav()">Site Home</a>
          <a href="#" onclick="closeNav()">Logout</a>
        </div>

        <button class="openbtn" id="openbtn1" onclick="openNav()">&#9776; </button>
        <a class="navbar-brand navBrandCust" id="hh" href="#">Dashboard</a>
        <a href="#" class="adminName text-decoration-none"><i class="fa fa-user" aria-hidden="true"></i> Md Shahed Rahman</a>



      </div>
      <script>
        function openNav() {
          document.getElementById("mySidepanel").style.width = "150px";
        }

        function closeNav() {
          document.getElementById("mySidepanel").style.width = "0";
        }</script>

    </div>
  </nav>
  <div class="clearfix"></div>
  <br>
  <div class="container mt-5 mb-5">
    <div class="row">
      <div class="col-lg-6 col-md-12 col-sm-12 mt-2">
          <!--Recent Notice-->
        <div class="card mt-2 cardCust" id="recentNotice">
          <div class="card-body">
            <h3 class="text-center mb-2">Recent Notice</h3>
            <h5>Institute Opening!!</h5>
            <span class="font-italic" style="font-size: 0.7rem;">Date: 17.1.2021 Time: 1.00am</span>
            <p class="font-weight-light" style="font-size: 1rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam. Ut aliquet tristique nisl vitae volutpat.Nulla aliquet porttitor venenatis. Donec a dui et dui fringilla consectetur id nec massa <br>
                <a class="font-weight-bold text-decoration-none" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-comment" aria-hidden="true"></i> Comments</a></p>

            <!--comments-->
            <div class="collapse bg-light" id="collapseExample1">
                <div class="commentSec card">
                    <h5 class="text-center">Comments</h5>
                    <div class="userComment ml-2">
                        <h6><i class="fa fa-user" aria-hidden="true"></i> Md Shuvo Khan</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, sit.</p>
                        <hr style="background: black;">
                    </div>
                    <div class="clearfix"></div>
                    <div class="userComment ml-2">
                        <h6><i class="fa fa-user" aria-hidden="true"></i> Md Shuvo Khan</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, sit.</p>
                        <hr style="background: black;">
                    </div>
                    <div class="clearfix"></div>
                    <div class="userComment ml-2">
                        <h6><i class="fa fa-user" aria-hidden="true"></i> Md Shuvo Khan</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, sit.</p>
                        <hr style="background: black;">
                    </div>
                    <div class="clearfix"></div>
                </div>
              </div>
              <!--Comment end-->
            <hr style="background: gray;">
            <div class="clearfix"></div>

            <h5>Institute Opening!!</h5>
            <span class="font-italic" style="font-size: 0.7rem;">Date: 17.1.2021 Time: 1.00am</span>
            <p class="font-weight-light" style="font-size: 1rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam. Ut aliquet tristique nisl vitae volutpat.Nulla aliquet porttitor venenatis. Donec a dui et dui fringilla consectetur id nec massa <br>
                 <a class="font-weight-bold text-decoration-none" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-comment" aria-hidden="true"></i> Comments</a></p>

            <!--comments-->
            <div class="collapse bg-light" id="collapseExample2">
                <div class="commentSec card">
                    <h5 class="text-center">Comments</h5>
                    <div class="userComment ml-2">
                        <h6><i class="fa fa-user" aria-hidden="true"></i> Md Shuvo Khan</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, sit.</p>
                        <hr style="background: black;">
                    </div>
                    <div class="clearfix"></div>
                    <div class="userComment ml-2">
                        <h6><i class="fa fa-user" aria-hidden="true"></i> Md Shuvo Khan</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, sit.</p>
                        <hr style="background: black;">
                    </div>
                    <div class="clearfix"></div>
                    <div class="userComment ml-2">
                        <h6><i class="fa fa-user" aria-hidden="true"></i> Md Shuvo Khan</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, sit.</p>
                        <hr style="background: black;">
                    </div>
                    <div class="clearfix"></div>
                </div>
              </div>
              <!--Comment end-->
            <hr style="background: gray;">
            <div class="clearfix"></div>
          </div>
        </div>
        <!--Recent Notice End-->
        <div class="clearfix"></div>
        <!--Manage-->
        <div class="card mt-3 cardCust" id="managePost">
            <div class="card-body">
                <h3 class="text-center mb-2">Recent Notice</h3>
                <h5>Institute Opening!!</h5>
                <span class="font-italic" style="font-size: 0.7rem;">Date: 17.1.2021 Time: 1.00am</span>
                <p class="font-weight-light" style="font-size: 1rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam. Ut aliquet tristique nisl vitae volutpat.Nulla aliquet porttitor venenatis. Donec a dui et dui fringilla consectetur id nec massa <br>
                    <a class="font-weight-bold text-decoration-none" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-comment" aria-hidden="true"></i> Comments</a> <button title="Remove Post" class="btn btn-outline-primary" type="submit"><i class="fa fa-trash" aria-hidden="true"></i> Remove Post</button></p>
    
                <!--comments-->
                <div class="collapse bg-light" id="collapseExample3">
                    <div class="commentSec card">
                        <h5 class="text-center">Comments</h5>
                        <div class="userComment ml-2">
                            <h6><i class="fa fa-user" aria-hidden="true"></i> Md Shuvo Khan</h5>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, sit.</p>
                            <hr style="background: black;">
                        </div>
                        <div class="clearfix"></div>
                        <div class="userComment ml-2">
                            <h6><i class="fa fa-user" aria-hidden="true"></i> Md Shuvo Khan</h5>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, sit.</p>
                            <hr style="background: black;">
                        </div>
                        <div class="clearfix"></div>
                        <div class="userComment ml-2">
                            <h6><i class="fa fa-user" aria-hidden="true"></i> Md Shuvo Khan</h5>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, sit.</p>
                            <hr style="background: black;">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                  </div>
                  <!--Comment end-->
                <hr style="background: gray;">
                <div class="clearfix"></div>
    
                <h5>Institute Opening!!</h5>
                <span class="font-italic" style="font-size: 0.7rem;">Date: 17.1.2021 Time: 1.00am</span>
                <p class="font-weight-light" style="font-size: 1rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam. Ut aliquet tristique nisl vitae volutpat.Nulla aliquet porttitor venenatis. Donec a dui et dui fringilla consectetur id nec massa <br>
                    <a class="font-weight-bold text-decoration-none" data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-comment" aria-hidden="true"></i> Comments</a> <button title="Remove Post" class="btn btn-outline-primary" type="submit"><i class="fa fa-trash" aria-hidden="true"></i> Remove Post</button></p>

            <!--comments-->
            <div class="collapse bg-light" id="collapseExample4">
                <div class="commentSec card">
                    <h5 class="text-center">Comments</h5>
                    <div class="userComment ml-2">
                        <h6><i class="fa fa-user" aria-hidden="true"></i> Md Shuvo Khan</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, sit.</p>
                        <hr style="background: black;">
                    </div>
                    <div class="clearfix"></div>
                    <div class="userComment ml-2">
                        <h6><i class="fa fa-user" aria-hidden="true"></i> Md Shuvo Khan</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, sit.</p>
                        <hr style="background: black;">
                    </div>
                    <div class="clearfix"></div>
                    <div class="userComment ml-2">
                        <h6><i class="fa fa-user" aria-hidden="true"></i> Md Shuvo Khan</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, sit.</p>
                        <hr style="background: black;">
                    </div>
                    <div class="clearfix"></div>
                </div>
              </div>
              <!--Comment end-->
            <hr style="background: gray;">
            <div class="clearfix"></div>
              </div>
        </div>
        <!--Manage End-->
        <div class="clearfix"></div>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="card text-center mt-3 p-2 cardCust" id="postNotice">
            <div class="postxt">
                <h5 class="text-center">Post a Notice</h5>
            </div>
            <div class="clearfix"></div>
            <form action="" method="">
            <div class="form">
                <label for="title">Title*</label><br>
                <textarea name="title" id=""  rows="2" placeholder="Title goes here" required></textarea><br>
                <label for="Post">Description*</label><br>
                <textarea name="post" id="" rows="3" placeholder="What's in your mind?" required></textarea><br>
                <label for="file">Select an image</label><br>
                <input type="file" name="" id="">
            </div>
            <div class="clearfix"></div>
            <button type="submit" class="btn btn-success btn-sm mt-1">Post</button>
          </form>
          </div>
      <div class="clearfix"></div>

      <div class="card text-center mt-3 p-2 cardCust" id="manageStudent">
        <div class="card-body">
            <h3 class="text-center mb-2">Manage Student</h3>
            <form action="" method="post">
            <label for="selectClas">Select Class</label>
            <select name=""  class="bg-primary" style="height: 38px;">
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
                <option value="">6</option>
                <option value="">7</option>
                <option value="">8</option>
                <option value="">9</option>
                <option value="">10</option>
            </select>
            <div class="tableCust mt-3">
                <h5 class="text-center">Student List</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>MD Jannat UL Naim</td>
                        <td>0123456789</td>
                        <td><button title="Remove" class="btn btn-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                    </tr>
                    <tr>
                        <td>Abdur Rahman Shuvo</td>
                        <td>0123456789</td>
                        <td><button title="Remove" class="btn btn-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                    </tr>
                    <tr>
                        <td>Shahed Mahamud Lemon</td>
                        <td>myemail@gmail.com</td>
                        <td><button title="Remove" class="btn btn-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                    </tr>
                    <tr>
                        <td>MD Jannat UL Naim</td>
                        <td>0123456789</td>
                        <td><button title="Remove" class="btn btn-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                    </tr>
                    <tr>
                        <td>Abdur Rahman Shuvo</td>
                        <td>0123456789</td>
                        <td><button title="Remove" class="btn btn-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                    </tr>
                    <tr>
                        <td>Shahed Mahamud Lemon</td>
                        <td>myemail@gmail.com</td>
                        <td><button title="Remove" class="btn btn-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                    </tr>
                </table>
            </div>
            <div class="clearfix"></div>
            <h6 class="text-center font-weight-light">Class Code: zxvcefg</h5>
            <div class="createCLass mt-3">
                <h4 class="text-center">Create a new class</h4>
                <label for="selectClas">Select Class</label>
            <select name=""  class="bg-primary" style="height: 38px;">
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
                <option value="">6</option>
                <option value="">7</option>
                <option value="">8</option>
                <option value="">9</option>
                <option value="">10</option>
            </select><br>
                <textarea class="my-1" name="code" id="" cols="43" rows="1" placeholder="Enter a new code" required></textarea>
            <div class="clearfix"></div>
            <button type="submit" class="btn btn-success btn-sm mt-1">Create</button>
            </div>
            </form>
            <div class="clearfix"></div>
          </div>
      </div>
    <div class="clearfix"></div>
    </div>
    </div>
    
</div>
<div class="clearfix"></div>
<div class="text-center p-1 footerNav">
    <p class="text-center text-light fs-5 mt-2">&copy; 2021 Copyright Tech Rhythms</p>
  </div>
  <!--    -->
  <!--    -->
  <!--    -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="js/webDashboard.js"></script>
</body>

</html>