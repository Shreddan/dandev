<?php
    require_once "./partials/header.php";
    $pageTitle = "Welcome";
    require_once "./partials/title.php"
?>
<div class="w-3/4 mx-auto bg-white p-8 border-t-4 border-teal-700 shadow-lg mt-10 mb-10">
    <p class="mb-3">Hello, my name is <b>Dan Twitchett</b></p>
    <p class="mb-3"> I started learning to program in September of 2018, I'd say its going pretty well, however there is still a long way to go yet!<p>
    <p class="mb-3">This website might not look like much now but I plan on putting alot of stuff here, and hopefully as time goes on my HTML and CSS skills will improve aswell.</p>
    <p class="mb-3">This website shall have many purposes, but for now I want to use it as</p>

    <ul class="list-disc ml-8 mb-3">
        <li>A place to post my Projects</li>
        <li>To list resources I have gathered and used during my learning process</li>
        <li>To have a bit of fun whilst brushing up on my HTML and CSS knowledge</li>
    </ul>

    <p class="mb-3">I've only been learning how to program for around 8 or 9 months-ish, and in that time ive tried, at least 5
        different programming languages. I have provided a general description and a link for each of these, in case you
        wish to learn more about these languages.</p>

    <div class="mt-10">
        <div class="flex items-center mb-10">
            <div class="w-2/12 text-center">
                <a href="https://godotengine.org/"><img class="h-24 inline-block" src="/Images/godot_logo.png"></a>
            </div>
            <div class="w-10/12">
                <p class="font-bold">GDscript</p>
                <p>The scripting language used by the Godot Engine.</p>
            </div>
        </div>
        <div class="flex items-center mb-10">
            <div class="w-2/12 text-center">
                <a href="https://en.wikipedia.org/wiki/C%2B%2B" class="a1"><img src="/Images/c.png" class="h-24 inline-block"></a>
            </div>
            <div class="w-10/12">
                <p class="font-bold">C++</p>
                <p>A general purpose programming language, this is the language that I am currently learning and using the most.</p>
            </div>
        </div>
        <div class="flex items-center mb-10">
            <div class="w-2/12 text-center">
                <a href="https://www.python.org/" class="a1"><img src="/Images/python.png" class="h-24 inline-block"></a>
            </div>
            <div class="w-10/12">
                <p class="font-bold">Python</p>
                <p>A high level, interpreted, general purpose programming language.</p>
            </div>
        </div>
        <div class="flex items-center mb-10">
            <div class="w-2/12 text-center">
                <a href="https://en.wikipedia.org/wiki/Java_(programming_language)" class="a1"><img src="/Images/java.png" class="h-24 inline-block"></a>
            </div>
            <div class="w-10/12">
                <p class="font-bold">Java</p>
                <p>A general purpose, class-based, object-oriented programming language.</p>
            </div>
        </div>
        <div class="flex items-center">
            <div class="w-2/12 text-center">
                <a href="https://javascript.info/intro" class="a1"><img src="/Images/UOJS.png" alt="UOJS" class="h-24 inline-block"></a>
            </div>
            <div class="w-10/12">
                <p class="font-bold">JavaScript</p>
                <p>A scripting language most often used in web design alongside HTML and CSS</p>
            </div>
        </div>
    </div>
</div>

<div class="hidden">
<p style="color:#00000F;font-size:14px;"><b>Have some kind words of encouragement? or perhaps some constructive criticism?<br> leave a comment below tell me what you love/like/hate about this site.<br> Be as brutally honest as you like, you can even comment anonymously if you want :)</b></p>
 <div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com">Widget</a> is loading comments...<br></div>
 <script type="text/javascript" id="hcb"> if(!window.hcb_user){hcb_user={};} (function(){var s=document.createElement("script"), l=hcb_user.PAGE || (""+window.location).replace(/'/g,"%27"), h="https://www.htmlcommentbox.com";s.setAttribute("type","text/javascript");s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&mod=%241%24wq1rdBcg%24PVBwcvcToJGz503XA4tts%2F"+"&opts=16862&num=10&ts=1562074373432");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); </script>
 </div>
<?php require_once "./partials/footer.php"; ?>