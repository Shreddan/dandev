<?php
    require_once "./partials/header.php";
    $pageTitle = "Project Diaries";
    require_once "./partials/title.php"
?>

<div class="mt-10 container mx-auto">
    <div class="bg-white shadow-md mb-8 border-teal-700 border-t-4">
        <div class="p-4 border-grey-200 border-b-2 flex items-center justify-between">
            <h2 class="text-lg font-bold">Project : OLCMud / MUD Client</h2>
            <p class="text-sm text-gray-700">Tuesday, 15/10/2019 12:56</p>
        </div>
        <div class="p-4">
            <p class="mb-3">Ive managed to create a MUD client in the console with ANSI Colour support! wooohooo, in fairness though
                the ansi part was way easier than I expected it just meant changing the console mode to enable processed
                output and virtual terminal stuff :D</p>
            <p class="mb-3">Next job is to fix a bug where sending to the server requires two sends to get the commands to work, but
                only after the OnConnect sequence....</p>
            <img src="/Images/DMud.png" alt="DMud1" class="w-5/12">
        </div>
    </div>
    <div class="bg-white shadow-md mb-8 border-teal-700 border-t-4">
        <div class="p-4 border-grey-200 border-b-2 flex items-center justify-between">
            <h2 class="text-lg font-bold">Project : OLCMud / MUD Client</h2>
            <p class="text-sm text-gray-700">Tuesday, 08/10/2019 11:26</p>
        </div>
        <div class="p-4">
            <p class="mb-3">You would think creating a MUD client sounds easy right?</p>
            <p class="mb-3"><strong>WRONG</strong></p>
            <p class="mb-3">What I did not realise when I began is that its not as easy as just creating a websocket, and connecting
                and outputting the received information to the screen.</p>
            <p class="mb-3">There are certain telnet Protocols that have to be followed in order to get the data to display in a way
                that is readable.</p>
            <p class="mb-3">During this time I have had to try to learn about <strong>Telnet</strong>, <strong>Negotiations</strong>
                and <strong>Sub-Negotiations</strong> and what certain bytes mean. <strong>(IAC, WILL, WONT, DO, DONT)</strong></p>
            <p>This will most certainly be a fun project indeed....</p>
        </div>
    </div>
    <div class="bg-white shadow-md mb-8 border-teal-700 border-t-4">
        <div class="p-4 border-grey-200 border-b-2 flex items-center justify-between">
            <h2 class="text-lg font-bold">Project : Text-Adventure/Single User Dungeon</h2>
            <p class="text-sm text-gray-700">Monday, 20/05/2019 17:43</p>
        </div>
        <div class="p-4">
            <p>I decided to give up on Regex, as a friend advised me, I didnt actually need it at all, and
                I could just check the Command string with an IF, and then it worked!, which was fantastic, I do however
                still need to figure out the right Algorithm in order to create a map that makes sense, I will be adding
                to this entry within the next couple of days...</p>
        </div>
    </div>
    <div class="bg-white shadow-md mb-8 border-teal-700 border-t-4">
        <div class="p-4 border-grey-200 border-b-2 flex items-center justify-between">
            <h2 class="text-lg font-bold">Project : Text-Adventure/Single User Dungeon</h2>
            <p class="text-sm text-gray-700">Tuesday, 14/05/2019 13:32</p>
        </div>
        <div class="p-4">
            <p class="mb-3">This week, I decided to have a go at a Text Adventure/Single User Dungeon type of game.</p>
            <p class="mb-3">Now most programmers or game designers will usually start off with some form of plan, however....</p>
            <p class="mb-3">I am not most programmers, I'm more of an On-The-Fly kind of guy, I like to let the plans work themselves
                out as I go. So I started out by creating my structs and creating my variables and such, and then i had
                a bit of a think about how I want this to work. Obviously a text-based game is going to require some
                form of Commands, so I did some googling and came across something called
                <a class="font-bold underline" href="https://en.cppreference.com/w/cpp/regex">Regular Expressions</a>,
                which allows you to create an expression and then match an input string to that expression, and I am
                hoping that by learning how to do this, I will be able to work out some form of Commands system, I then
                went on to create a World, which is really just a place to hold the Areas, and then the Rooms are
                contained within the Areas.</p>
            <p class="mb-3">After that, I created a function to give the rooms Descriptions and created a Look Command for the player
                as well as the four directions. I made the Game loop, initialised everything and did a test run with
                just one room.</p>
            <p class="mb-3">However my Look command wouldnt work, I tried everything I rearranged the regexs(Regular Expressions),
                added them to a vector but got very stuck when only the last regex would match every time. I decided it
                was time to take a break for a while and come back with fresh eyes the next day, which I did but I still
                couldnt figure it out. I tried different If statements, Else Ifs and everything.</p>
            <p>But alas to no avail.</p>
        </div>
    </div>
</div>

<div class="hidden" style="border-style:dotted;">
<p style="color:#00000F;font-size:14px;"><b>Have some kind words of encouragement? or perhaps some constructive criticism?<br> leave a comment below tell me what you love/like/hate about this site.<br> Be as brutally honest as you like, you can even comment anonymously if you want :)</b></p>
 <div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com">Widget</a> is loading comments...<br></div>
 <br>
 <script type="text/javascript" id="hcb"> if(!window.hcb_user){hcb_user={};} (function(){var s=document.createElement("script"), l=hcb_user.PAGE || (""+window.location).replace(/'/g,"%27"), h="https://www.htmlcommentbox.com";s.setAttribute("type","text/javascript");s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&mod=%241%24wq1rdBcg%24PVBwcvcToJGz503XA4tts%2F"+"&opts=16862&num=10&ts=1562074373432");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); </script>
 </div>

<?php require_once "./partials/footer.php"; ?>