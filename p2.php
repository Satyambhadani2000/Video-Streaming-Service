<?php
$vid="images/video.mp4";
$con=mysqli_connect("localhost","root","","mytube");
$sql="insert into history(video) values('$vid')";
mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Play video page</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <nav class="flex-div">
            <div class="nav-left flex-div">
                <img src="images/menu.png" class="menu-icon">
                <img src="images/logo2.jpg" class="logo">
            </div>
            <div class="nav-middle flex-div">
                <div class="search-box flex-div">
                    <input type="text" placeholder="Search">
                    <img src="images/search.png">
                </div>
                <img src="images/voice-search.png" class="mic-icon">


            </div>
            <div class="nav-right flex-div">
                <img src="images/upload.png">
                <img src="images/more.png">
                <img src="images/notification.png">
                <img src="images/Jack.png" class="user-icon">
            </div>
        </nav>

        <div class="container play-container">
            <div class="row">
                <div class="play-video">
                    <video controls autoplay>
                        <source src="images/video.mp4" type="video/mp4">
                        
                    </video>
                    <div class="tags">
                        <a href="">#Coding</a> <a href="">HTML</a> <a href="">CSS</a> <a href="">JavaScript</a>
                    </div>
                    <h3>Best channel to learn web development</h3>
                    <div class="play-video-info">
                        <p>1225 views &bull; 2 days ago</p>
                        <div>
                            <a href=""><img src="images/like.png">125</a>
                            <a href=""><img src="images/dislike.png">3</a>
                            <a href=""><img src="images/share.png">Share</a>
                            <a href=""><img src="images/save.png">Save</a>
                        </div>
                    </div>
                    <hr>
                    <div class="publisher">
                        <img src="images/Jack.png">
                        <div>
                            <p>Easy Tutorials</p>
                            <span>50k Subscribers</span>
                            
                        </div>
                        <button type="button">Subscribe</button>
                    </div>
                    <div class="vid-description">
                        <p>Channels that makes learning easy</p>
                        <p>Subscribe to learn more </p>
                        <hr>
                        <h4>134 Comments</h4>

                        <div class="add-comment">
                            <img src="images/Jack.png">
                            <input type="text" placeholder="Write comments...">
                        </div>

                        <div class="old-comment">
                            <img src="images/cameron.png">
                            <div>
                                <h3>Tharun MS <span>2 days ago</span></h3>
                                <p>Nice video and good information</p>
                                <div class="comment-action">
                                    <img src="images/like.png">
                                    <span>44</span>
                                    <img src="images/dislike.png">
                                    <span>20</span>
                                    <span>REPLY</span>
                                    <a href="">All replies</a>
                                </div>
                            </div>
                        </div>

                        <div class="old-comment">
                            <img src="images/satyam.jpeg">
                            <div>
                                <h3>Satyam <span>2 days ago</span></h3>
                                <p>Nice video and good information</p>
                                <div class="comment-action">
                                    <img src="images/like.png">
                                    <span>24</span>
                                    <img src="images/dislike.png">
                                    <span>20</span>
                                    <span>REPLY</span>
                                    <a href="">All replies</a>
                                </div>
                            </div>
                        </div>

                        <div class="old-comment">
                            <img src="images/megan.png">
                            <div>
                                <h3>Kunal Raj <span>2 days ago</span></h3>
                                <p>Nice video and good information</p>
                                <div class="comment-action">
                                    <img src="images/like.png">
                                    <span>244</span>
                                    <img src="images/dislike.png">
                                    <span>20</span>
                                    <span>REPLY</span>
                                    <a href="">All replies</a>
                                </div>
                            </div>
                        </div>

                        <div class="old-comment">
                            <img src="images/megan.png">
                            <div>
                                <h3>Manish Pandey <span>2 days ago</span></h3>
                                <p>Nice video</p>
                                <div class="comment-action">
                                    <img src="images/like.png">
                                    <span>244</span>
                                    <img src="images/dislike.png">
                                    <span>20</span>
                                    <span>REPLY</span>
                                    <a href="">All replies</a>
                                </div>
                            </div>
                        </div>
                        <div class="old-comment">
                            <img src="images/megan.png">
                            <div>
                                <h3>Arun <span>2 days ago</span></h3>
                                <p>Nice video</p>
                                <div class="comment-action">
                                    <img src="images/like.png">
                                    <span>244</span>
                                    <img src="images/dislike.png">
                                    <span>20</span>
                                    <span>REPLY</span>
                                    <a href="">All replies</a>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
                <div class="right-sidebar">

                    <div class="side-video-list">
                        <a href="" class="small-thumbnail"><img src="images/thumbnail1.png"></a>
                        <div class="vid-info">
                            <a href="">Best channel that helps you to become a web developer</a>
                            <p>Easy Tutorials</p>
                            <p>15k views</p>
                        </div>
                    </div>
                    <div class="side-video-list">
                        <a href="page3.html" class="small-thumbnail"><img src="images/Guilty-Lyrics.jpg"></a>
                        <div class="vid-info">
                            <a href="">Guilty Video Song mp4 Inder Chahal ft. Karan Aujla</a>
                            <p>Planet Recordz</p>
                            <p>15k views</p>
                        </div>
                    </div>
                    <div class="side-video-list">
                        <a href="page4.html" class="small-thumbnail"><img src="images/image8.jpg"></a>
                        <div class="vid-info">
                            <a href="">Titliyaan mp4 Harrdy Sandhu ft. Jaani B Praak</a>
                            <p>Desi Melodies</p>
                            <p>100M views</p>
                        </div>
                    </div>
                    <div class="side-video-list">
                        <a href="page5.html" class="small-thumbnail"><img src="images/image7.jpg"></a>
                        <div class="vid-info">
                            <a href="">Titliyaan song Afsana Khan Mp4 B Praak</a>
                            <p>Desi Melodies</p>
                            <p>15k views</p>
                        </div>
                    </div>
                    <div class="side-video-list">
                        <a href="page6.html" class="small-thumbnail"><img src="images/image9.jpeg"></a>
                        <div class="vid-info">
                            <a href="">Web Development in One video</a>
                            <p>CWH</p>
                            <p>150k views</p>
                        </div>
                    </div>
                    <div class="side-video-list">
                        <a href="" class="small-thumbnail"><img src="images/image10.jpg"></a>
                        <div class="vid-info">
                            <a href="">Learn Mongo DB</a>
                            <p>Easy Tutorials</p>
                            <p>15k views</p>
                        </div>
                    </div>
                    <div class="side-video-list">
                        <a href="" class="small-thumbnail"><img src="images/image13.jpg"></a>
                        <div class="vid-info">
                            <a href="">Node JS Tutorial in one video</a>
                            <p>JS Master</p>
                            <p>15k views</p>
                        </div>
                    </div>
                    <div class="side-video-list">
                        <a href="" class="small-thumbnail"><img src="images/image14.png"></a>
                        <div class="vid-info">
                            <a href="">Java Tutorial in one video</a>
                            <p>Easy Tutorials</p>
                            <p>15k views</p>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>


    </body>
    </html>
