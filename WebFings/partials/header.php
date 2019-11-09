<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Programming Blog/Resource">
    <meta name="keywords" content= "HTML,CSS,JavaScript,CPP,Java,Godot,GDScript,Programming,Github,Blog,Creatures,Creatures2,Creatures3,DockingStation,OLC">
    <meta name="author" content="Dan Twitchett">

    <script src="https://kit.fontawesome.com/db8f25acf5.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!--<link rel="stylesheet" type="text/css" href="danStyle.css">-->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script type="text/javascript">
        $(document).ready(function() {
            function GetClock(){
                var d=new Date();
                var nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getFullYear();
                var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds();
                if(nmin<=9) nmin="0"+nmin;
                if(nsec<=9) nsec="0"+nsec;

                var clocktext=""+ndate+"/"+(nmonth+1)+"/"+nyear+" "+nhour+":"+nmin+":"+nsec+"";
                document.getElementById('clockbox').innerHTML=clocktext;
            }

            GetClock();
            setInterval(GetClock,1000);
        })
    </script>
    <title>My Programming Journey</title>
</head>
<body class="bg-gray-100">
<div class="bg-teal-800 py-3 text-white">
    <div class="w-8/12 text-center mx-auto">
        <a class="pr-4 inline-block" href="/">Home</a>
        <a class="pr-4 inline-block" href="/projects">Projects</a>
        <a class="pr-4 inline-block" href="/project-diaries">Project Diaries</a>
        <a class="pr-4 inline-block" href="/resources">Resources</a>
        <a class="pr-4 inline-block" href="/about-me">About Me</a>
        <a class="inline-block" href="/personal">Personal Blog</a>
    </div>
</div>
