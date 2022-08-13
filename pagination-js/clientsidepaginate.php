<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-image: linear-gradient(-20deg, #ff2846 0%, #6944ff 100%);
            background-image: linear-gradient(-20deg, #ff2846 0%, #6944ff 100%);
            font-family: 'PT Serif', serif;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
            min-height: 100vh;
            overflow: hidden;
        }

        .card {
            max-width: 800px;
            border-radius: 6px;
            background: #eee;
            box-shadow: 2px 3px 23px rgba(0, 0, 0, 0.3);
            padding: 1em 0em;
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            transition: 0.2s;
        }

        h1 {
            margin: 20px auto;
            color: white;
        }

        .itsMe {
            position: absolute;
            bottom: 10px;
            right: 14px;
            display: block;
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 2px 3px 10px rgba(0, 0, 0, 0.1);
            padding: 6px 12px;
            color: rgba(0, 0, 0, 0.9);
            text-decoration: none;
        }

        .itsMe:hover {
            color: rgba(0, 0, 0, 1);
            background-color: rgba(255, 255, 255, 1);
        }

        h3,
        span {
            color: #666;
        }

        h3 {
            font-size: 14px;
            line-height: normal;
            margin: 4px 0 0 0;
            color: #666;
        }

        span {
            font-size: 12px;
        }

        hr {
            border-color: #fff;
            background-color: #fff;
        }

        .advusorListCUrl {
            overflow: hidden;
        }

        .advusorListCUrl a {
            border: 1px solid #dee1e3;
            display: block;
            padding: 4px;
            background-color: #fff;
            margin: 0 0 10px 0;
            clear: both;
            overflow: hidden;
            border-radius: 2px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15);
        }

        .advusorListCUrl a:hover {
            border: 1px solid #ddd;
            background-color: #eee;
            border-radius: 1px;
            box-shadow: 0 1px 0px rgba(0, 0, 0, 0.15);
        }

        .advusorListCUrl li {
            width: 46%;
            display: inline-block;
            float: left;
            margin-right: 2px;
        }

        .advusorListCUrl img {
            height: 50px;
            width: auto;
        }

        #page_navigation {
            clear: both;
            margin: 10px 0 0 38px;
        }

        #page_navigation a {
            padding: 3px;
            border: 1px solid rgba(0, 0, 0, 0.15);
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15);
            margin: 2px;
            color: black;
            text-decoration: none;
            background-color: #fff;
            border-radius: 3px;
            padding: 4px 8px
        }

        .page_link.active_page {
            background: #999 !important;
            color: #fff !important;
        }

        .profile-image {
            width: 60px;
            float: left;
            border-radius: 50%;
        }

        address {
            margin-left: 10px;
            display: block;
            float: left;
        }
    </style>
</head>

<body>
    <!-- the input fields that will hold the variables we will use -->
    <input type='hidden' id='current_page' />
    <input type='hidden' id='show_per_page' />

    <!-- Content div. The child elements will be used for paginating(they don't have to be all the same,
		you can use divs, paragraphs, spans, or whatever you like mixed together). '-->

    <h1>Javascript Pagination</h1>
    <div class="card">
        <ul class="advusorListCUrl" id="pagingBox">
            <li class="admin" style="display: none;"> <a href="view-profile/?adv_id=1"> <img class="profile-image img-responsive" src="http://unsplash.it/id/1024/100/100/">
                    <address>
                        <h3>kibria</h3>
                        <span>postmaster@gmail.com</span>
                    </address>
                </a> </li>
            <li class="Navi Dowty" style="display: none;"> <a href="view-profile/?adv_id=6"> <img class="profile-image img-responsive" src="http://unsplash.it/id/309/100/100/">
                    <address>
                        <h3>Navi Dowty</h3>
                        <span>navidowty@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Brian Adams" style="display: none;"> <a href="view-profile/?adv_id=7"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>Brian Adams</h3>
                        <span>badams@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Justin Barwick" style="display: none;"> <a href="view-profile/?adv_id=8"> <img class="profile-image img-responsive" src="http://unsplash.it/id/357/100/100/">
                    <address>
                        <h3>Justin Barwick</h3>
                        <span>postmaster@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Steven Bassetto" style="display: none;"> <a href="view-profile/?adv_id=9"> <img class="profile-image img-responsive" src="http://unsplash.it/id/984/100/100/">
                    <address>
                        <h3>Steven Bassetto</h3>
                        <span>SBassetto@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Michelle Bertram" style="display: none;"> <a href="view-profile/?adv_id=10"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>Michelle Bertram</h3>
                        <span>postmaster@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Thomas Best" style="display: none;"> <a href="view-profile/?adv_id=11"> <img class="profile-image img-responsive" src="http://unsplash.it/id/659/100/100/">
                    <address>
                        <h3>Thomas Best</h3>
                        <span>tbest@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Trace Yarbrough" style="display: none;"> <a href="view-profile/?adv_id=12"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>Trace Yarbrough</h3>
                        <span>tyarbrough@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Dale Wolberg" style="display: none;"> <a href="view-profile/?adv_id=13"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>Dale Wolberg</h3>
                        <span>postmaster@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="George Carbone" style="display: none;"> <a href="view-profile/?adv_id=14"> <img class="profile-image img-responsive" src="http://unsplash.it/id/654/100/100/">
                    <address>
                        <h3>George Carbone</h3>
                        <span>GCarbone@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Bruce Chadwick" style="display: none;"> <a href="view-profile/?adv_id=15"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>Bruce Chadwick</h3>
                        <span>bchadwick@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Pete Wittman" style="display: none;"> <a href="view-profile/?adv_id=16"> <img class="profile-image img-responsive" src="http://unsplash.it/id/361/100/100/">
                    <address>
                        <h3>Pete Wittman</h3>
                        <span>postmaster@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Steven Wise" style="display: none;"> <a href="view-profile/?adv_id=17"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>Steven Wise</h3>
                        <span>postmaster@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Barney Coelho" style="display: none;"> <a href="view-profile/?adv_id=18"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>Barney Coelho</h3>
                        <span>barney@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Norm Winn" style="display: none;"> <a href="view-profile/?adv_id=19"> <img class="profile-image img-responsive" src="http://unsplash.it/id/875/100/100/">
                    <address>
                        <h3>Norm Winn</h3>
                        <span>postmaster@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Howard Cox" style="display: none;"> <a href="view-profile/?adv_id=20"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>Howard Cox</h3>
                        <span>Hcox@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Michael White" style="display: none;"> <a href="view-profile/?adv_id=21"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>Michael White</h3>
                        <span>postmaster@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Diane M Davis" style="display: none;"> <a href="view-profile/?adv_id=22"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>Diane M Davis</h3>
                        <span>ddavis@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Skipper Waller" style="display: none;"> <a href="view-profile/?adv_id=23"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>Skipper Waller</h3>
                        <span>postmaster@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Joe Dowling" style="display: none;"> <a href="view-profile/?adv_id=24"> <img class="profile-image img-responsive" src="http://unsplash.it/id/954/100/100/">
                    <address>
                        <h3>Joe Dowling</h3>
                        <span>postmaster@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Scott Vignere" style="display: none;"> <a href="view-profile/?adv_id=25"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>Scott Vignere</h3>
                        <span>svignere@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Dave Vick" style="display: none;"> <a href="view-profile/?adv_id=26"> <img class="profile-image img-responsive" src="http://unsplash.it/id/57/100/100/">
                    <address>
                        <h3>Dave Vick</h3>
                        <span>postmaster@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="George Egan" style="display: none;"> <a href="view-profile/?adv_id=27"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>George Egan</h3>
                        <span>corcap1@designtrick.net</span>
                    </address>
                </a> </li>
            <li class="August Velten" style="display: none;"> <a href="view-profile/?adv_id=28"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>August Velten</h3>
                        <span>postmaster@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Spenser Vago" style="display: none;"> <a href="view-profile/?adv_id=29"> <img class="profile-image img-responsive" src="http://unsplash.it/id/111/100/100/">
                    <address>
                        <h3>Spenser Vago</h3>
                        <span>svago@vagofinancial.com</span>
                    </address>
                </a> </li>
            <li class="Antonio Filippone" style="display: none;"> <a href="view-profile/?adv_id=30"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>Antonio Filippone</h3>
                        <span>postmaster@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Justin Tramp" style="display: none;"> <a href="view-profile/?adv_id=31"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>Justin Tramp</h3>
                        <span>JTramp@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Mark Fricks" style="display: none;"> <a href="view-profile/?adv_id=32"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>Mark Fricks</h3>
                        <span>postmaster@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Charles Trakas" style="display: none;"> <a href="view-profile/?adv_id=33"> <img class="profile-image img-responsive" src="http://unsplash.it/id/57/100/100/">
                    <address>
                        <h3>Charles Trakas</h3>
                        <span>ctrakas@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Harry R Greene" style="display: none;"> <a href="view-profile/?adv_id=34"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>Harry R Greene</h3>
                        <span>postmaster@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Patty Tipton" style="display: block;"> <a href="view-profile/?adv_id=35"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>Patty Tipton</h3>
                        <span>ptipton@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Justin Halverson" style="display: block;"> <a href="view-profile/?adv_id=36"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>Justin Halverson</h3>
                        <span>Halverson@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Dennis Szymanski" style="display: block;"> <a href="view-profile/?adv_id=37"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>Dennis Szymanski</h3>
                        <span>dennis@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Don Hayes" style="display: block;"> <a href="view-profile/?adv_id=38"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>Hayes Don</h3>
                        <span>Hayes@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="David Stryzewski" style="display: block;"> <a href="view-profile/?adv_id=39"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>David Stryzewski</h3>
                        <span>davids@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Norm Strom" style="display: block;"> <a href="view-profile/?adv_id=40"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>Norm Strom</h3>
                        <span>Norm@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Amy Hayes-Frazier" style="display: block;"> <a href="view-profile/?adv_id=41"> <img class="profile-image img-responsive" src="http://unsplash.it/id/157/100/100/">
                    <address>
                        <h3>Amy Hayes-Frazier</h3>
                        <span>amy@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Richard Staves" style="display: block;"> <a href="view-profile/?adv_id=42"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>Richard Staves</h3>
                        <span>Staves@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Adam A Helwich" style="display: block;"> <a href="view-profile/?adv_id=43"> <img class="profile-image img-responsive" src="http://unsplash.it/id/567/100/100/">
                    <address>
                        <h3>Adam A Helwich</h3>
                        <span>Ahelwich@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Brian Solik" style="display: block;"> <a href="view-profile/?adv_id=44"> <img class="profile-image img-responsive" src="http://unsplash.it/id/357/100/100/">
                    <address>
                        <h3>Brian Solik</h3>
                        <span>SolikBSolik@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Ray Hodges" style="display: block;"> <a href="view-profile/?adv_id=45"> <img class="profile-image img-responsive" src="http://unsplash.it/id/543/100/100/">
                    <address>
                        <h3>Ray Hodges</h3>
                        <span>rhodges@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Wayne Sisk" style="display: block;"> <a href="view-profile/?adv_id=46"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>Wayne Sisk</h3>
                        <span>Siskwsisk@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Jeff Holmes" style="display: block;"> <a href="view-profile/?adv_id=47"> <img class="profile-image img-responsive" src="http://unsplash.it/id/987/100/100/">
                    <address>
                        <h3>Jeff Holmes</h3>
                        <span>Jholmes@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Doug Singer" style="display: block;"> <a href="view-profile/?adv_id=48"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>Doug Singer</h3>
                        <span>dsinger@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Charlie Horan" style="display: block;"> <a href="view-profile/?adv_id=49"> <img class="profile-image img-responsive" src="http://unsplash.it/id/432/100/100/">
                    <address>
                        <h3>Charlie Horan</h3>
                        <span>pch@criteriumfinancial.com</span>
                    </address>
                </a> </li>
            <li class="Larry Simpson" style="display: none;"> <a href="view-profile/?adv_id=50"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>Larry Simpson</h3>
                        <span>Simpson@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Katrina Savage" style="display: none;"> <a href="view-profile/?adv_id=51"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>Katrina Savage</h3>
                        <span>Ksavage@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Roy Innella" style="display: none;"> <a href="view-profile/?adv_id=52"> <img class="profile-image img-responsive" src="http://unsplash.it/id/300/100/100/">
                    <address>
                        <h3>Roy Innella</h3>
                        <span>Roy@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Zach Roberts" style="display: none;"> <a href="view-profile/?adv_id=53"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>Zach Roberts</h3>
                        <span>ZRoberts@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Thomas Jackson" style="display: none;"> <a href="view-profile/?adv_id=54"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>Thomas Jackson</h3>
                        <span>TJackson@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Bryan Rich" style="display: none;"> <a href="view-profile/?adv_id=55"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>Bryan Rich</h3>
                        <span>Brich@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Skip Johnson" style="display: none;"> <a href="view-profile/?adv_id=56"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>Skip Johnson</h3>
                        <span>Skip@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Will Johnson" style="display: none;"> <a href="view-profile/?adv_id=57"> <img class="profile-image img-responsive" src="http://unsplash.it/id/800/100/100/">
                    <address>
                        <h3>Will Johnson</h3>
                        <span>will@mygreatwaters.com</span>
                    </address>
                </a> </li>
            <li class="Raymond Reese" style="display: none;"> <a href="view-profile/?adv_id=58"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>Raymond Reese</h3>
                        <span>Treese@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Carmine Pardi" style="display: none;"> <a href="view-profile/?adv_id=59"> <img class="profile-image img-responsive" src="http://unsplash.it/id/600/100/100/">
                    <address>
                        <h3>Carmine Pardi</h3>
                        <span>cpardi@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Richard Keppler" style="display: none;"> <a href="view-profile/?adv_id=60"> <img class="profile-image img-responsive" src="http://unsplash.it/id/369/100/100/">
                    <address>
                        <h3>Richard Keppler</h3>
                        <span>rkeppler@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="James Nunez" style="display: none;"> <a href="view-profile/?adv_id=61"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>James Nunez</h3>
                        <span>jnunez@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Elijah Kovar" style="display: none;"> <a href="view-profile/?adv_id=62"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>Elijah Kovar</h3>
                        <span>EKovar@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="James Neathery" style="display: none;"> <a href="view-profile/?adv_id=63"> <img class="profile-image img-responsive" src="http://unsplash.it/id/100/100/100/">
                    <address>
                        <h3>James Neathery</h3>
                        <span>Jneathery@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Patrick Lagan" style="display: none;"> <a href="view-profile/?adv_id=64"> <img class="profile-image img-responsive" src="http://unsplash.it/id/309/100/100/">
                    <address>
                        <h3>Patrick Lagan</h3>
                        <span>plagan@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Bill Myers" style="display: none;"> <a href="view-profile/?adv_id=65"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>Bill Myers</h3>
                        <span>bmyers@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Peter Lampert" style="display: none;"> <a href="view-profile/?adv_id=66"> <img class="profile-image img-responsive" src="http://unsplash.it/id/369/100/100/">
                    <address>
                        <h3>Peter Lampert</h3>
                        <span>PLampert@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Ralph Moore" style="display: none;"> <a href="view-profile/?adv_id=67"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>Ralph Moore</h3>
                        <span>rmoore@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Michael Lange" style="display: none;"> <a href="view-profile/?adv_id=68"> <img class="profile-image img-responsive" src="http://unsplash.it/id/269/100/100/">
                    <address>
                        <h3>Michael Lange</h3>
                        <span>Mlange@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Kevin Meiselbach" style="display: none;"> <a href="view-profile/?adv_id=69"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>Kevin Meiselbach</h3>
                        <span>postmaster@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Joshua Legband" style="display: none;"> <a href="view-profile/?adv_id=70"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>Joshua Legband</h3>
                        <span>postmaster@mygreatwaters.com</span>
                    </address>
                </a> </li>
            <li class="John Lowry" style="display: none;"> <a href="view-profile/?adv_id=71"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>John Lowry</h3>
                        <span>postmaster@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Carlton McDowell" style="display: none;"> <a href="view-profile/?adv_id=72"> <img class="profile-image img-responsive" src="http://unsplash.it/100/100/">
                    <address>
                        <h3>Carlton McDowell</h3>
                        <span>postmaster@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="Jeff Mccarty" style="display: none;"> <a href="view-profile/?adv_id=73"> <img class="profile-image img-responsive" src="http://unsplash.it/id/369/100/100/">
                    <address>
                        <h3>postmaster Mccarty</h3>
                        <span>postmaster@designtrick.com</span>
                    </address>
                </a> </li>
            <li class="John McCartin" style="display: none;"> <a href="view-profile/?adv_id=74"> <img class="profile-image img-responsive" src="http://unsplash.it/id/1020/100/100/">
                    <address>
                        <h3>John McCartin</h3>
                        <span>postmaster@designtrick.com</span>
                    </address>
                </a> </li>
        </ul>
        <hr>
        <!-- An empty div which will be populated using jQuery -->
        <div id='page_navigation'></div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {

            //how much items per page to show
            var show_per_page = 10;
            //getting the amount of elements inside pagingBox div
            var number_of_items = $('#pagingBox').children().length;
            //calculate the number of pages we are going to have
            var number_of_pages = Math.ceil(number_of_items / show_per_page);

            //set the value of our hidden input fields
            $('#current_page').val(0);
            $('#show_per_page').val(show_per_page);

            //now when we got all we need for the navigation let's make it '

            /* 
            what are we going to have in the navigation?
            	- link to previous page
            	- links to specific pages
            	- link to next page
            */
            var navigation_html = '<a class="previous_link" href="javascript:previous();">Prev</a>';
            var current_link = 0;
            while (number_of_pages > current_link) {
                navigation_html += '<a class="page_link" href="javascript:go_to_page(' + current_link + ')" longdesc="' + current_link + '">' + (current_link + 1) + '</a>';
                current_link++;
            }
            navigation_html += '<a class="next_link" href="javascript:next();">Next</a>';

            $('#page_navigation').html(navigation_html);

            //add active_page class to the first page link
            $('#page_navigation .page_link:first').addClass('active_page');

            //hide all the elements inside pagingBox div
            $('#pagingBox').children().css('display', 'none');

            //and show the first n (show_per_page) elements
            $('#pagingBox').children().slice(0, show_per_page).css('display', 'block');

        });

        function previous() {

            new_page = parseInt($('#current_page').val()) - 1;
            //if there is an item before the current active link run the function
            if ($('.active_page').prev('.page_link').length == true) {
                go_to_page(new_page);
            }

        }

        function next() {
            new_page = parseInt($('#current_page').val()) + 1;
            //if there is an item after the current active link run the function
            if ($('.active_page').next('.page_link').length == true) {
                go_to_page(new_page);
            }

        }

        function go_to_page(page_num) {
            //get the number of items shown per page
            var show_per_page = parseInt($('#show_per_page').val());

            //get the element number where to start the slice from
            start_from = page_num * show_per_page;

            //get the element number where to end the slice
            end_on = start_from + show_per_page;

            //hide all children elements of pagingBox div, get specific items and show them
            $('#pagingBox').children().css('display', 'none').slice(start_from, end_on).css('display', 'block');

            /*get the page link that has longdesc attribute of the current page and add active_page class to it
            and remove that class from previously active page link*/
            $('.page_link[longdesc=' + page_num + ']').addClass('active_page').siblings('.active_page').removeClass('active_page');

            //update the current page input field
            $('#current_page').val(page_num);
        }
    </script>
</body>

</html>