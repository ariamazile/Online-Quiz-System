<?php
session_start();

?>


<div class="row" style= "...">
<div class="col-lg-6 col lg-push3" style="...">
<br>
<div class="row">
    <br>
    <div class="col-lg-2 col-lg-push-10">
        <div id="current_question" style="float:left">0</div>
        <div style="float:left"></div>
        <div id="total_question" style="float:left">0</div>
</div>

<div class="row" style="margin-top: 30px">
<div class="row">
    <div class="col-lg-10 col-lg-push-1" style="min-height: 30px; background color white" id="load_questions">
</div>
</div>
</div>

<div class="row" style="margin-top: 10px">
<div class="col-lg-6 col-lg-push-3" style="min-height: 50px">
<div class="col-lg-12 text-center">
    <input type="button" class="btn btn-warning" value="previous" onclick="load_previous();">&nbsp;
    <input type="button" class="btn btn-success" value="next" onclick="load_next();">
</div>
</div>
</div>
</div>

</div>
</div>

<script type="text/javascript">
    function load_total_question()
{
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
        if(xmlhttp.readyState==4 && xmlhttp.status==200){
            document.getElementById("total_question").innerHTML=xmlhttp.responseText;
        }
    };
    xmlhttp.open("GET", "forajax/load_total_question.php", true);
    xmlhttp.send(null);
}
var questionno="1";
load_questions(questionno);
function load_questions(questionno)
{
    document.getElementId("current_question").innerHTML=questionno;
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
        if(xmlhttp.readyState==4 && xmlhttp.status==200){

            if(xmlhttp.responseText=="over")
            {
                window.location="result.php";
            }
            else{
                document.getElementId("load_questions").innerHTML=xmlhttp.responseText;
                load_total_question();

            }
            
        }
    };
    xmlhttp.open("GET", "forajax/load_questions.php?questionno="+ questionno, true);
    xmlhttp.send(null);
}

function radioclick(radiovalue, questionno)
{
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
        if(xmlhttp.readyState==4 && xmlhttp.status==200){
            
        }
    };
    xmlhttp.open("GET", "forajax/save_answer_in_session.php?questionno="+ questionno +"&value1="+radiovalue, true);
    xmlhttp.send(null);
}

function load_previous()
{
    if(questionno=="1")
    {
        load_questions(questionno);
    }
    else{
        questionno=eva1(questionno)-1;
        load_questions(questionno);
    }
}
function load_next()
{
    questionno=eva1(questionno)-1;
        load_questions(questionno);
}
    </script>
