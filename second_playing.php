<?php
$list1='';
$list2='';
$list3='';
$list4='';
$list5='';
$list6='';
$list7='';
$list8='';
$list9='';
$list10='';
$list11='';
$list12='';
$conn = mysqli_connect("localhost", "root", "123456", "pknu_db"); //db연결
$sql = "select * from domestic";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);
$list1 = $list1."<li>{$row['title']}</li>";
$list2 = $list2."<li>{$row['gasa']}</li>";

$row = mysqli_fetch_array($result);
$list3 = $list3."<li>{$row['title']}</li>";
$list4 = $list4."<li>{$row['gasa']}</li>";

$row = mysqli_fetch_array($result);
$list5 = $list5."<li>{$row['title']}</li>";
$list6 = $list6."<li>{$row['gasa']}</li>";

$row = mysqli_fetch_array($result);
$list7 = $list7."<li>{$row['title']}</li>";
$list8 = $list8."<li>{$row['gasa']}</li>";

$row = mysqli_fetch_array($result);
$list9 = $list9."<li>{$row['title']}</li>";
$list10 = $list10."<li>{$row['gasa']}</li>";

$row = mysqli_fetch_array($result);
$list11 = $list11."<li>{$row['title']}</li>";
$list12 = $list12."<li>{$row['gasa']}</li>";

?>

<html lang = "ko">
    <head>
        <title> 국내 City Pop Play_List</title>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="second_style.css"> <!--css연동-->
    </head>
    <body>
        <!--페이지_1-->
        <div class = "wrap">
            <div class = "intro_bg"> <!--상단영역-->
                <div class ="header" id="link_header"> <!--class는 .으로, id는 #으로 표기-->
                    <div class = "search_area">
                        <form>
                        <input type="search" placeholder="Search">
                        <span>검색</span>
                        </form>
                        </div>
                        <ul class="nav">
                        <li><a href="second_index.html">홈</a></li>
                        <li><a href="second_aboutUs.html">소개</a></li>
                        <li><a href="second_playing.php#domestic">국내</a></li>
                        <li><a href="second_foreign.html#foreign">해외</a></li>
                    </ul>
                </div>
                <div class="menu_design">
                <ul>
                    <li class="Play_List">Play List</li>
                    <div>
                    <li><a href="#first_music?id=1">빛과 소금 - 샴푸의요정</a></li>
                    <li><a href="#second_music?id=2">레인보우 노트 - 1호선</a></li>
                    <li><a href="#third_music?id=3">윤종신 - Welcom Summer</a></li>
                    <li><a href="#fourth_music?id=4">제인팝 - Drive to 1980 Love</a></li>
                    <li><a href="#five_music?id=5">윤상 - 한걸음 더</a></li>
                    <li><a href="#six_music?id=6">김현철 - Drive</a></li>
                    </div>
                </ul>
                </div>
                <div class="intro_text">
                    <h1> City Pop </h1>
                    <h4 class="contents1">레트로한 감성을 느껴보세요</h4>
                </div>
            </div>
        </div>

        <!--페이지_2--> 
        <div class = "wrap">
            <div class = "domestic_intro_bg_2"> <!--상단영역-->
                <div class ="header_2" id="first_music?id=1"> <!--class는 .으로, id는 #으로 표기-->
                <div class="intro_text_1">
                    <div class="main_text1">
                        <h1>국내 City Pop</h1>
                        <div class="contents1"> </div>
                        <div class="service">
                          <div class="photo">
                            <img src="image/shampoo.png" width="500px" height="400px">
                                <div class="music_frame">
                                <!--오디오버튼영역-->
                                <audio src="multimedia/샴푸의 요정.mp3" id="music" type = "audio/mp3" controls="controls" loop="loop"></audio>
                                <div id="time"></div>
                                <script src="second_sound.js"></script>  
                                </div>
                          </div>
                          <div class="contents2">
                            <h2>
                                <?php    
                                   echo $list1;
                                ?>
                            </h2>
                                <?php    
                                   echo $list2;
                                ?>
                          </div>  
                        </div>        
                      </div> 
                    </div> 
                </div>
            </div>
        </div>

       <!--페이지_3--> 
        <div class = "wrap">
            <div class = "domestic_intro_bg_2"> <!--상단영역-->
                <div class ="header_2" id="second_music?id=2"> <!--class는 .으로, id는 #으로 표기-->
                <div class="intro_text_1">
                    <div class="main_text1">
                        <h1>국내 City Pop</h1>
                        <div class="contents1"> </div>
                        <div class="service">
                          <div class="photo">
                            <img src="image/rainbow note.PNG" width="500px" height="400px">
                                <div class="music_frame">
                                <!--오디오버튼영역-->
                                <audio src="multimedia/1호선.mp3" id="music" type = "audio/mp3" controls="controls" loop="loop"></audio>
                                <div id="time"></div>
                                <script src="second_sound.js"></script> 
                                </div>
                          </div>
                          <div class="contents2">
                            <h2>
                                <?php    
                                   echo $list3;
                                ?>
                            </h2>
                                <?php    
                                   echo $list4;
                                ?>
                          </div>  
                        </div>
                      </div> 
                    </div> 
                </div>
            </div>
        </div>

        <!--페이지_4--> 
        <div class = "wrap">
            <div class = "domestic_intro_bg_2"> <!--상단영역-->
                <div class ="header_2" id="third_music?id=3"> <!--class는 .으로, id는 #으로 표기-->
                <div class="intro_text_1">
                    <div class="main_text1">
                        <h1>국내 City Pop</h1>
                        <div class="contents1"> </div>
                        <div class="service">
                          <div class="photo">
                            <img src="image/domestic_welcome_summer.jpg" width="500px" height="400px">
                                <div class="music_frame">
                                <!--오디오버튼영역-->
                                <audio src="multimedia/윤종신 - Welcome Summer.mp3" id="music" type = "audio/mp3" controls="controls" loop="loop"></audio>
                                <div id="time"></div>
                                <script src="second_sound.js"></script>  
                                </div>
                          </div>

                          <div class="contents2">
                            <h2>
                                <?php    
                                    echo $list5;
                                ?>
                            </h2>
                                <?php    
                                    echo $list6;
                                ?>
                          </div>  
                        </div>
                        
                      </div> 
                    </div> 
                </div>
            </div>
        </div>

        <!--페이지_5--> 
        <div class = "wrap">
            <div class = "domestic_intro_bg_2"> <!--상단영역-->
                <div class ="header_2" id="fourth_music?id=4"> <!--class는 .으로, id는 #으로 표기-->
                <div class="intro_text_1">
                    <div class="main_text1">
                        <h1>국내 City Pop</h1>
                        <div class="contents1"> </div>
                        <div class="service">
                          <div class="photo">
                            <img src="image/jane_pop.jpeg" width="500px" height="400px">
                                <div class="music_frame">
                                <!--오디오버튼영역-->
                                <audio src="multimedia/제인팝 - Drive To 1980 Love (Citypop DEMO) (1).mp3" id="music" type = "audio/mp3" controls="controls" loop="loop"></audio>
                                <div id="time"></div>
                                <script src="second_sound.js"></script>  
                                </div>
                          </div>

                          <div class="contents2">
                            <h2>
                                <?php    
                                    echo $list7;
                                ?>
                            </h2>
                                <?php    
                                    echo $list8;
                                ?>
                          </div>  
                        </div>
                      </div> 
                    </div> 
                </div>
            </div>
        </div>

        <!--페이지_6--> 
        <div class = "wrap">
            <div class = "domestic_intro_bg_2"> <!--상단영역-->
                <div class ="header_2" id="five_music?id=5"> <!--class는 .으로, id는 #으로 표기-->
                <div class="intro_text_1">
                    <div class="main_text1">
                        <h1>국내 City Pop</h1>
                        <div class="contents1"> </div>
                        <div class="service">
                          <div class="photo">
                            <img src="image/city pop_list_5.jpeg" width="500px" height="400px">
                                <div class="music_frame">
                                <!--오디오버튼영역-->
                                <audio src="multimedia/윤상 (Yoon Sang) - 한 걸음 더.mp3" id="music" type = "audio/mp3" controls="controls" loop="loop"></audio>
                                <div id="time"></div>
                                <script src="second_sound.js"></script>  
                                </div>
                          </div>

                          <div class="contents2">
                            <h2>
                                <?php    
                                    echo $list9;
                                ?>
                            </h2>
                                <?php    
                                    echo $list10;
                                ?>
                          </div>  
                        </div>
                      </div> 
                    </div> 
                </div>
            </div>
        </div>

        <!--페이지_7--> 
        <div class = "wrap">
            <div class = "domestic_intro_bg_2"> <!--상단영역-->
                <div class ="header_2" id="six_music?id=6"> <!--class는 .으로, id는 #으로 표기-->
                <div class="intro_text_1">
                    <div class="main_text1">
                        <h1>국내 City Pop</h1>
                        <div class="contents1"> </div>
                        <div class="service">
                          <div class="photo">
                            <img src="image/summerman.PNG" width="500px" height="400px">
                                <div class="music_frame">
                                <!--오디오버튼영역-->
                                <audio src="multimedia/Drive (Feat. George (죠지)) - 김현철 (kim hyun chul) (2019).mp3" id="music" type = "audio/mp3" controls="controls" loop="loop"></audio>
                                <div id="time"></div>
                                <script src="second_sound.js"></script>  
                                </div>
                          </div>

                          <div class="contents2">
                            <h2>
                                <?php    
                                    echo $list11;
                                ?>
                            </h2>
                                <?php    
                                    echo $list12;
                                ?>
                          </div>  
                        </div>
                      </div> 
                    </div> 
                </div>
            </div>
        </div>

        <!--하단영역-->
        <footer>    
            <div>
                LOGO
            </div>
            <div>
                DABOK FRONTEND PROJECT <br>
                양산시 물금읍 야리로111 123-456 <br>
                010 - 1234 - 5678 <br>
                COPYRIGHT 2021. DABOK. ALL RIGHT RESERVED <br>
            </div>
        </footer> 
    </body>
</html>