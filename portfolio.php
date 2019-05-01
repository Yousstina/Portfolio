<html>
<style>
body
{
    margin:0;
    padding:0;
    background:url(images/n.jpg);
    background-attachment: fixed;
    background-size:cover;
}
.knowlege
{
    height: 300px;
    width: 300px;
    display: inline;
}
.knowlege:hover
{
    filter: brightness(70%) ;
    height: 310px;

}
.k{
    margin-left: 307px;
}
.project
{
    margin-left: 307px;

}
    .container
    {
        height: 99.6%;
        width: 300px;
        margin-right: 300px;
        border:2px solid gainsboro;
        position: fixed;
        background: darkslategray;
    }
    .laptop
    {
        position: fixed;
        top:1px;
        width:299px;
    }
    .container h2
    {
        font-size: x-large;
        font-style: oblique;
        position: absolute;
        top:20px;
        left:70px;
        color: gainsboro;
    }
    .me
    {
        position: absolute;
        border-radius: 50%;
        height: 100px;
        width: 100px;
        top:80px;
        left:90px;
        border:4px solid gainsboro;
    }
    .container h
    {
        font-size: x-large;
        font-style: oblique;
        font-weight: bolder;
        position: absolute;
        color: gainsboro;
        top:200px;
        left:35px;
    }
    .container h1
    {
        font-size:small;
        font-style: oblique;
        position: absolute;
        color: gainsboro;
        top:250px;
        left:10px;
    }
    .details
    {
        width: fit-content;
        height: fit-content;
        position: fixed;
        background: black;
        opacity: 0.5;
        color: gainsboro;
        border-radius: 30%;
        border: gainsboro solid 1px;
    }
    .details:hover
    {
        filter: brightness(90%);
        border: firebrick solid 2px;
    }

    .choose:hover
    {
        border: 4px solid firebrick;

    }

    .container projects,.container qu
    {
        font-size: x-large;
        color: goldenrod;
        text-shadow: 2px 2px 5px black;

    }
    .container qu:hover,container projects:hover
    {
        color: firebrick;
    }
    .container projects:hover
    {
        color: firebrick;
        text-shadow: 2px 2px 5px black;
    }
    m:hover , a:hover ,e:hover , b:hover,t:hover
    {
        color: firebrick;
    }
</style>

<head>
    <title>
    Yousstina's portfolio
</title>
    <link rel="shortcut icon"  href="images/yousstina.jpg">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
</head>
<body>
<div class="container">
    <img src="images/21579f4dc25a025.jpg" class="laptop">
    <h2>
        Web Developer
    </h2>
    <img src="images/yousstina.jpg" class="me">
    <h>
        YOUSSTINA FATHY
    </h>
    <h1>
        <m> Mobile number</m> <mn>: 012*******</mn> <br>
        <a> Address </a>      <ad>: address</ad> <br>
        <e>Email</e>          <em>: ******@****.com</em> <br>
        <b>Birth date</b>     <bi>: -/-/----</bi> <br>
        <t>study in</t>       <st>: University</st><br> <br> <br>
      <qu> - qualifiction </qu> <br>
        <projects>- Projects i did</projects>

    </h1>
</div>

<div class="k" id="k">
<img src="images/php.png" class="knowlege" id="php">
<img src="images/css.png" class="knowlege" id="css">
<img src="images/html.jpg" class="knowlege" id="html">
<img src="images/js.png" class="knowlege" id="js">
<img src="images/nodejs.png" class="knowlege" id="nodejs">
<img src="images/jquery.png" class="knowlege" id="jquery">
<img src="images/c++.png" class="knowlege" id="cpp">
<img src="images/java.jpg" class="knowlege" id="java">
<img src="images/problemSolving.jpg" class="knowlege" id="problemSolving">
<img src="images/oop.jpg" class="knowlege" id="oop">

</div>

<div class="project" id="project">
    <img src="images/POTOBOOK.jpg" class="knowlege" id="potobook">
    <img src="images/masroka.png" class="knowlege" id="ma">
</div>

<div class="details" id="details">
    <i><img class="choose" id="imgd" ></i>
    <text></text>
</div>


</body>

<script>


    $(document).ready(function () {
        function me(id,id2){
            $(id2).css("color","goldenrod");
            $(id).click(function () {
                    if($(id2).is(":hidden")) {
                        $(id2).show();
                    }
                    else
                    {
                        $(id2).hide();
                    }
                });
        }
   $("mn").hide();
   $("ad").hide();
   $("em").hide();
   $("bi").hide();
   $("st").hide();
 me("m","mn"); me("a","ad"); me("e","em");me("b","bi");me("t","st");

    });

    $(document).ready(function () {
       $("#project").hide();
        $("qu").css("color"," firebrick");
        $("projects").click(function () {
           $("projects").css("color"," firebrick");
           $("qu").css("color"," goldenrod");
           $("#project").show();
           $("#k").hide();
       });
       $("qu").click(function () {
           $("projects").css("color"," goldenrod");
           $("qu").css("color"," firebrick");
           $("#project").hide();
           $("#k").show();
       })
    });
    function de( id,description)
    {
        id="#"+id;
        $(document).ready(function(){

            $(id).click(function(){
                $("#details").show();
                $("#imgd").attr('src',$(this).attr('src'));
                $("text").html(description);
                $("#imgd").attr("width",50);
                $("#imgd").attr("height",50);
                $("#details").css("padding","50px");
                if(id=="#potobook" ||id=="#ma")
                {
                    $("#details").css("margin-left","30%");
                    $("#details").css("margin-top","-50px");
                    $("#details").click(function(){
                        $(this).hide();
                    });
                    if(id=="#potobook") {
                        $("#imgd").click(function () {
                            window.location.replace("http://localhost/Protfolio/projects/potobook/project.php");
                        });
                    }
                    else if(id=="#ma")
                    {
                        $("#imgd").click(function () {
                            window.location.replace("http://localhost/protfolio/projects/Masroka/home.php");
                        });
                    }
                }
                else
                {
                    $("#imgd").click(function () {window.location.replace("http://localhost/Protfolio/portfolio.php") });
                    $("#details").css("margin-left","43%") ;
                    $("#details").css("margin-top", "-83%");
                    $("#details").click(function(){
                        $(this).hide();
                    });
                }


            });
        });

    }

    de("php","perfect in php");
    de("css","perfect in css");
    de("html","perfect in html");
    de("js","good in js");
    de("nodejs","not good right now i learn it");
    de("jquery","very good in jquery");
    de("cpp","perfect in C++");
    de("java","very good in java");
    de("problemSolving","very good in problem solving");
    de("oop","perfect Understand of oop");
    de("potobook","POTOBOOK is a social media website that every user have followers and is following some users that use POTOBOOK , It represents my qualifications in PHP and SQL , also there is a basic chat method included written in PHP (i can Modified and enhanced with JQuery)(click on the photo to see it)");
    de("ma","roka is directed to users who find something missing or has something missing , so Masroka is a website that helps those type of people to reach each other as the finder posts a picture about the missing item attaching some questions with it to make sure the guest who answers those questions is the real owner of the item . It shows my ability in PHP and OOP but It doesn`t have the fulfilling front-end but i have the ability to accomplish It perfectly. (click on the photo to see it)");
</script>
</html>